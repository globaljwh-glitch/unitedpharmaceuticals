<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Career;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function add_product()
    {
        return view('admin.add_product');
    }

    public function save_product(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:255',
                'vendor' => 'nullable|string|max:255',
                'product_price' => 'nullable|numeric|min:0',
                'variant_inventory_qty' => 'required|integer|min:0',
                'images' => 'nullable|array',
                'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            ],
            [
                'title.required' => 'Product title is required.',
                'title.max' => 'Product title cannot exceed 255 characters.',

                'vendor.max' => 'Vendor name cannot exceed 255 characters.',

                'product_price.numeric' => 'Product price must be a valid number.',
                'product_price.min' => 'Product price cannot be negative.',

                'variant_inventory_qty.required' => 'Inventory quantity is required.',
                'variant_inventory_qty.integer' => 'Inventory quantity must be a number.',
                'variant_inventory_qty.min' => 'Inventory quantity cannot be negative.',

                'images.array' => 'Invalid image format.',
                'images.*.image' => 'Each file must be an image.',
                'images.*.mimes' => 'Images must be jpg, jpeg, png or webp.',
                'images.*.max' => 'Each image must not exceed 2MB.',
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $baseSlug = Str::slug($request->title);
        $slug = $baseSlug;
        $count = 1;

        while (Product::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count;
            $count++;
        }

        $imageNames = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products/images', 'public');
                $imageNames[] = $path;
            }
        }


        Product::create([
            'name' => $request->title,
            'slug' => $slug,
            'vendor' => $request->vendor,
            'price' => $request->product_price,
            'quantity' => $request->variant_inventory_qty,
            'image' => $imageNames,
        ]);

        return redirect()
            ->route('all_product')
            ->with('success', 'Product added successfully!');
    }


    public function all_products()
    {
        $products = Product::latest()->get();
        return view('admin.all_products', compact('products'));
    }

    public function edit_product($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.edit_product', compact('product'));
    }


    public function update_product(Request $request, $id)
    {
        $product = Product::findOrFail($id);


        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:255',
                'vendor' => 'nullable|string|max:255',
                'product_price' => 'nullable|numeric|min:0',
                'variant_inventory_qty' => 'required|integer|min:0',
                'images' => 'nullable|array',
                'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            ],
            [
                'title.required' => 'Product title is required.',
                'variant_inventory_qty.required' => 'Inventory quantity is required.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        if ($product->title !== $request->title) {
            $baseSlug = Str::slug($request->title);
            $slug = $baseSlug;
            $count = 1;

            while (
                Product::where('slug', $slug)
                    ->where('id', '!=', $product->id)
                    ->exists()
            ) {
                $slug = $baseSlug . '-' . $count++;
            }

            $product->slug = $slug;
        }


        $imageNames = $product->images ?? [];

        if ($request->hasFile('images')) {

            // delete old images
            if (!empty($imageNames)) {
                foreach ($imageNames as $img) {
                    Storage::disk('public')->delete($img);
                }
            }

            $imageNames = [];

            foreach ($request->file('images') as $image) {
                $path = $image->store('products/images', 'public');
                $imageNames[] = $path;
            }
        }


        $product->update([
            'name' => $request->title,
            'vendor' => $request->vendor,
            'price' => $request->product_price,
            'quantity' => $request->variant_inventory_qty,
            'image' => $imageNames,
        ]);

        return redirect()
            ->route('all_product')
            ->with('success', ' Product updated successfully!');
    }

    public function delete_product($id)
    {
        $product = Product::findOrFail($id);
        if (!empty($product->images)) {
            foreach ($product->images as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        $product->delete();
        return redirect()
            ->route('all_product')
            ->with('success', 'Product deleted successfully!');
    }

    public function create_career()
    {
        return view('admin.add_career');
    }

    public function save_career(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Career::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 1
        ]);

        return redirect()->route('career.index')->with('success', 'Career added successfully!');
    }

    public function all_careers()
    {
        $careers = Career::latest()->get();
        return view('admin.all_career', compact('careers'));
    }


    public function edit_career($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.edit_career', compact('career'));
    }

    public function update_career(Request $request, $id)
    {
        $career = Career::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $career->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('career.index')->with('success', 'Career updated successfully!');
    }


    public function delete_career($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();

        return redirect()->route('career.index')->with('success', 'Career deleted successfully!');
    }

    public function all_career_requests()
    {
        return view('admin.all_requests');
    }


    public function all_orders()
    {
        return view('admin.all_orders');
    }

    public function all_contact_requests()
    {
        $contact_req = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contact_requests', compact('contact_req'));
    }

    public function settings()
    {
        return view('admin.settings');
    }

   
}
