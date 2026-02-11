<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Chemicals;
use App\Models\ChemicalImage;
use App\Models\Event;
use App\Models\CareerApplication;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Category;
use App\Models\ChemicalCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;

class AdminController extends Controller
{

    public function add_product()
    {
        $categories = ChemicalCategory::where('status', 1)->get();
        return view('admin.add_product', compact('categories'));
    }

    public function add_chemical()
    {
        $categories = ChemicalCategory::where('status', 1)->get();
        return view('admin.add_product', compact('categories'));
    }


    public function save_chemical(Request $request)
    {

        $request->validate([
            'chemical_name' => 'required|string|max:255',

            'categories' => 'nullable|array',
            'categories.*' => 'exists:chemical_categories,id',

            'image_key.*' => 'nullable|string|max:100',
            'image_file.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        $chemical = Chemicals::create([
            'chemical_name' => $request->chemical_name,
            'nonproprietary_names' => $request->nonproprietary_names,
            'synonyms' => $request->synonyms,
            'chemical_registry' => $request->chemical_registry,
            'empirical_formula' => $request->empirical_formula,
            'structural_formula' => $request->structural_formula,
            'applications' => $request->applications,
            'description' => $request->description,
            'pharmacopeial_specifications' => $request->pharmacopeial_specifications,
            'typical_properties' => $request->typical_properties,
            'stability_storage' => $request->stability_storage,
            'incompatibilities' => $request->incompatibilities,
            'method_of_manufacture' => $request->method_of_manufacture,
            'safety' => $request->safety,
            'handling_precautions' => $request->handling_precautions,
            'regulatory_status' => $request->regulatory_status,
            'related_substances' => $request->related_substances,
            'comments' => $request->comments,
        ]);


        if ($request->filled('categories')) {
            $chemical->categories()->sync($request->categories);
        }


        if ($request->has('image_key')) {
            foreach ($request->image_key as $i => $key) {
                if (!empty($key) && isset($request->image_file[$i])) {

                    $path = $request->image_file[$i]
                        ->store('chemicals/images', 'public');

                    ChemicalImage::create([
                        'chemicals_id' => $chemical->id,
                        'image_key' => $key,
                        'image_path' => $path,
                    ]);
                }
            }
        }

        return redirect()
            ->route('all_product')
            ->with('success', 'Chemical saved successfully');
    }

    public function update_chemical(Request $request, $id)
    {
        $request->validate([
            'chemical_name' => 'required|string|max:255',

            'categories' => 'nullable|array',
            'categories.*' => 'exists:chemical_categories,id',

            'image_key.*' => 'nullable|string|max:100',
            'image_file.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $chemical = Chemicals::findOrFail($id);


        $chemical->update([
            'chemical_name' => $request->chemical_name,
            'nonproprietary_names' => $request->nonproprietary_names,
            'synonyms' => $request->synonyms,
            'chemical_registry' => $request->chemical_registry,
            'empirical_formula' => $request->empirical_formula,
            'structural_formula' => $request->structural_formula,
            'applications' => $request->applications,
            'description' => $request->description,
            'pharmacopeial_specifications' => $request->pharmacopeial_specifications,
            'typical_properties' => $request->typical_properties,
            'stability_storage' => $request->stability_storage,
            'incompatibilities' => $request->incompatibilities,
            'method_of_manufacture' => $request->method_of_manufacture,
            'safety' => $request->safety,
            'handling_precautions' => $request->handling_precautions,
            'regulatory_status' => $request->regulatory_status,
            'related_substances' => $request->related_substances,
            'comments' => $request->comments,
        ]);


        if ($request->has('categories')) {
            $chemical->categories()->sync($request->categories);
        } else {
            $chemical->categories()->sync([]);
        }


        if ($request->has('image_key')) {
            foreach ($request->image_key as $i => $key) {
                if (!empty($key) && isset($request->image_file[$i])) {

                    $path = $request->image_file[$i]
                        ->store('chemicals/images', 'public');

                    ChemicalImage::create([
                        'chemicals_id' => $chemical->id,
                        'image_key' => $key,
                        'image_path' => $path,
                    ]);
                }
            }
        }

        return redirect()
            ->route('all_product')
            ->with('success', 'Chemical updated successfully');
    }

    public function deleteChemicalImage(Request $request)
    {
        $img = ChemicalImage::findOrFail($request->id);

        Storage::delete('public/' . $img->image_path);

        $img->delete();

        return response()->json(['success' => true]);
    }

    public function delete_chemical($id)
    {
        $chemical = Chemicals::with(['images', 'categories'])->findOrFail($id);


        foreach ($chemical->images as $img) {
            if (\Storage::disk('public')->exists($img->image_path)) {
                \Storage::disk('public')->delete($img->image_path);
            }
        }


        $chemical->images()->delete();


        $chemical->categories()->detach();


        $chemical->delete();

        return back()->with('success', 'Chemical deleted successfully');
    }




    // public function save_product(Request $request)
    // {

    //     $validator = Validator::make(
    //         $request->all(),
    //         [
    //             'title' => 'required|string|max:255',
    //             'vendor' => 'nullable|string|max:255',
    //             'product_price' => 'nullable|numeric|min:0',
    //             'variant_inventory_qty' => 'required|integer|min:0',
    //             'images' => 'nullable|array',
    //             'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
    //         ],
    //         [
    //             'title.required' => 'Product title is required.',
    //             'title.max' => 'Product title cannot exceed 255 characters.',

    //             'vendor.max' => 'Vendor name cannot exceed 255 characters.',

    //             'product_price.numeric' => 'Product price must be a valid number.',
    //             'product_price.min' => 'Product price cannot be negative.',

    //             'variant_inventory_qty.required' => 'Inventory quantity is required.',
    //             'variant_inventory_qty.integer' => 'Inventory quantity must be a number.',
    //             'variant_inventory_qty.min' => 'Inventory quantity cannot be negative.',

    //             'images.array' => 'Invalid image format.',
    //             'images.*.image' => 'Each file must be an image.',
    //             'images.*.mimes' => 'Images must be jpg, jpeg, png or webp.',
    //             'images.*.max' => 'Each image must not exceed 2MB.',
    //         ]
    //     );

    //     if ($validator->fails()) {
    //         return redirect()
    //             ->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     $baseSlug = Str::slug($request->title);
    //     $slug = $baseSlug;
    //     $count = 1;

    //     while (Product::where('slug', $slug)->exists()) {
    //         $slug = $baseSlug . '-' . $count;
    //         $count++;
    //     }

    //     $imageNames = [];

    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $image) {
    //             $path = $image->store('products/images', 'public');
    //             $imageNames[] = $path;
    //         }
    //     }


    //     Product::create([
    //         'name' => $request->title,
    //         'slug' => $slug,
    //         'vendor' => $request->vendor,
    //         'price' => $request->product_price,
    //         'category_id' => $request->category_id,
    //         'sub_category_id' => $request->sub_category_id,

    //         'quantity' => $request->variant_inventory_qty,
    //         'image' => $imageNames,
    //     ]);

    //     return redirect()
    //         ->route('all_product')
    //         ->with('success', 'Product added successfully!');
    // }


    public function all_products()
    {
        $products = Chemicals::with(['categories', 'images'])
            ->latest()
            ->paginate(15);

        return view('admin.all_products', compact('products'));
    }

    public function edit_product($id)
    {
        $product = Chemicals::findOrFail($id);
        $categories = ChemicalCategory::where('status', 1)
            ->get();

        return view('admin.edit_product', compact('product', 'categories'));
    }


    // public function update_product(Request $request, $id)
    // {
    //     $product = Chemicals::findOrFail($id);

    //     $validator = Validator::make(
    //         $request->all(),
    //         [
    //             'title' => 'required|string|max:255',
    //             'vendor' => 'nullable|string|max:255',


    //             'category_id' => 'required|exists:categories,id',
    //             'sub_category_id' => 'nullable|exists:categories,id',

    //             'product_price' => 'nullable|numeric|min:0',
    //             'variant_inventory_qty' => 'required|integer|min:0',
    //             'images' => 'nullable|array',
    //             'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
    //         ],
    //         [
    //             'title.required' => 'Product title is required.',
    //             'category_id.required' => 'Category is required.',
    //             'variant_inventory_qty.required' => 'Inventory quantity is required.',
    //         ]
    //     );

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }


    //     if ($product->name !== $request->title) {

    //         $baseSlug = Str::slug($request->title);
    //         $slug = $baseSlug;
    //         $count = 1;

    //         while (
    //             Product::where('slug', $slug)
    //                 ->where('id', '!=', $product->id)
    //                 ->exists()
    //         ) {
    //             $slug = $baseSlug . '-' . $count++;
    //         }

    //         $product->slug = $slug;
    //     }


    //     $imageNames = $product->image ?? [];

    //     if ($request->hasFile('images')) {


    //         if (!empty($imageNames)) {
    //             foreach ($imageNames as $img) {
    //                 Storage::disk('public')->delete($img);
    //             }
    //         }

    //         $imageNames = [];

    //         foreach ($request->file('images') as $image) {
    //             $path = $image->store('products/images', 'public');
    //             $imageNames[] = $path;
    //         }
    //     }


    //     $product->update([
    //         'name' => $request->title,
    //         'vendor' => $request->vendor,
    //         'category_id' => $request->category_id,
    //         'sub_category_id' => $request->sub_category_id,
    //         'price' => $request->product_price,
    //         'quantity' => $request->variant_inventory_qty,
    //         'image' => $imageNames,
    //     ]);

    //     return redirect()
    //         ->route('all_product')
    //         ->with('success', 'Product updated successfully!');
    // }


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
            'slug' => Str::slug($request->title),
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


        if ($career->title !== $request->title) {
            $slug = Str::slug($request->title);
            $count = Career::where('slug', 'like', $slug . '%')
                ->where('id', '!=', $career->id)
                ->count();

            if ($count > 0) {
                $slug = $slug . '-' . ($count + 1);
            }

            $career->slug = $slug;
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
        $applications = CareerApplication::with('job')
            ->orderBy('id', 'desc')
            ->paginate(20);
        return view('admin.all_requests', compact('applications'));
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


    public function categories()
    {
        $categories = Category::with('parent')

            ->get();

        return view('admin.categories.index', compact('categories'));
    }

    // CREATE FORM
    public function create_category()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.categories.create', compact('categories'));
    }

    // STORE
    public function store_category(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' => $request->parent_id,
            'status' => $request->status ?? 1,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'Category created successfully');
    }

    // EDIT FORM
    public function edit_category($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::whereNull('parent_id')
            ->where('id', '!=', $id)
            ->get();

        return view('admin.categories.edit', compact('category', 'categories'));
    }

    // UPDATE
    public function update_category(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' => $request->parent_id,
            'status' => $request->status,
            'sort_order' => $request->sort_order,
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully');
    }

    // DELETE
    public function destroy_category($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully');
    }




    private $frontendPages = [
        'home' => 'Home Page',
        'preclinical' => 'Preclinical Services',
        'clinical' => 'clinical Services',
        'manufacturingservice' => 'Manufacturing & Analytical Services',
        'bioanalyticalservice' => 'Bioanalytical Services'
    ];
    public function all_blogs()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create_blogs()
    {
        $frontendPages = $this->frontendPages;
        return view('admin.blogs.create', compact('frontendPages'));
    }

    public function store_blogs(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'status' => 'required|in:0,1',
            'frontend_page' => 'required|string'
        ]);

        $slug = Str::slug($request->title);
        $baseSlug = $slug;
        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store('blogs', 'public');
        }

        Blog::create([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imagePath,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
            'frontend_page' => $request->frontend_page
        ]);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog added successfully!');
    }

    public function edit_blogs($id)
    {
        $blog = Blog::findOrFail($id);
        $frontendPages = $this->frontendPages;
        return view('admin.blogs.edit', compact('blog', 'frontendPages'));
    }

    public function update_blogs(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'status' => 'required|in:0,1',
            'frontend_page' => 'required|string'
        ]);

        if ($blog->title !== $request->title) {
            $slug = Str::slug($request->title);
            $baseSlug = $slug;
            $count = 1;
            while (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $baseSlug . '-' . $count++;
            }
            $blog->slug = $slug;
        }

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->image->store('blogs', 'public');
        }

        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
            'frontend_page' => $request->frontend_page
        ]);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog updated successfully!');
    }

    public function delete_blogs($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        return back()->with('success', 'Blog deleted successfully!');
    }


    public function all_events()
    {
        $events = Event::orderBy('id', 'desc')->get();
        return view('admin.events.index', compact('events'));
    }

    public function create_events()
    {
        return view('admin.events.create');
    }

    public function store_events(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'from_date' => 'required|date',
            'to_date' => 'nullable|date|after_or_equal:from_date',
            'location' => 'required|max:200',
            'description' => 'nullable|min:10'
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')
            ->with('success', 'Event added successfully');
    }

    public function edit_events($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update_events(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'from_date' => 'required|date',
            'to_date' => 'nullable|date|after_or_equal:from_date',
            'location' => 'required|max:200',
            'description' => 'nullable|min:10'
        ]);

        $event = Event::findOrFail($id);
        $event->update($request->all());

        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully');
    }

    public function destroy_events($id)
    {
        Event::where('id', $id)->delete();
        return back()->with('success', 'Event deleted');
    }

}
