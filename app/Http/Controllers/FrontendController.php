<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\CareerApplication;
use App\Models\EmailOtp;
use App\Models\Blog;
use App\Models\Chemical;
use App\Models\Chemicals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\Career;
use App\Mail\UserThankYouMail;
use App\Mail\AdminContactNotificationMail;
use App\Mail\OtpMail;
use App\Models\Event;
use Carbon\Carbon;
use App\Mail\CareerAdminMail;
use App\Mail\CareerUserMail;

class FrontendController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('frontend_page', 'home')
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->limit(12)
            ->get();

        return view('home', compact('blogs'));
    }

    public function about_us()
    {
        return view('aboutus');
    }

    public function Career()
    {
        $jobs = Career::orderBy('created_at', 'desc')->get();
        return view('career', compact('jobs'));
    }

    public function show_job($slug)
    {
        $job = Career::where('slug', $slug)->firstOrFail();
        return view('career_detail', compact('job'));
    }

    public function Contact_us()
    {
        return view('contactus');
    }

    public function Sample()
    {
        return view('samples');
    }

    public function Enquiry()
    {
        return view('enquries');
    }

    public function preclinical_services()
    {
        $blogs = Blog::where('frontend_page', 'preclinical')
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->limit(12)
            ->get();
        return view('priclinical_services', compact('blogs'));
    }

    public function clinical_services()
    {
        $blogs = Blog::where('frontend_page', 'clinical')
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->limit(12)
            ->get();
        return view('clinical_services', compact('blogs'));
    }

    public function manufacturing_analytic()
    {
        $blogs = Blog::where('frontend_page', 'home')
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->limit(12)
            ->get();
        return view('manufacturing_analytic', compact('blogs'));
    }

    public function formulation_development()
    {
        return view('formulation_development');
    }

    public function code_of_conduct()
    {
        return view('code_of_conduct');
    }

    public function tablet_manufacturing()
    {
        return view('tablet_manufacturing');
    }

    public function research_support_services()
    {
        return view('research_support_service');
    }
    public function liquid_capsules()
    {
        return view('liquid_filled_capsules');
    }

    public function spray_dried()
    {
        return view('spray_dried');
    }

    public function blinded_study()
    {
        return view('blinded_study');
    }

    public function powder_filled()
    {
        return view('powder_filled');
    }
    public function potent_handling()
    {
        return view('potent_handling');
    }

    public function nanomilling()
    {
        return view('nanomilling');
    }

    public function therapeutic_areas()
    {
        return view('therapeutic-areas');
    }

    public function quality_safety()
    {
        return view('quality_safety');
    }

    public function packaging_materials()
    {
        return view('packaging_materails');
    }

    public function bioanalytical_service()
    {
        $blogs = Blog::where('frontend_page', 'bioanalyticalservice')
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->limit(12)
            ->get();
        return view('bioanalytical_service', compact('blogs'));
    }

    public function machinery_equipment()
    {
        return view('machinery_equipment');
    }

    public function other_manufacturing()
    {
        return view('other_manufacturing');
    }

    public function packaging_components()
    {
        return view('packaging_components');
    }

    public function terminal_sterilization()
    {
        return view('terminal_sterlization');
    }
    public function development_programs()
    {
        return view('development_programs');
    }
    public function product_release_testing()
    {
        return view('product_release_testing');
    }

    public function method_development()
    {
        return view('method_development');
    }

    public function storage_testing()
    {
        return view('storage_testing');
    }
    public function show($page = null)
    {
        return view('coming-soon', compact('page'));
    }
    public function storeSample(Request $request)
    {

        $request->validate([
            'f_name' => 'required|string|max:100',
            'l_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|min:8|max:20',
            'company_name' => 'required|string|max:150',
            'solutions' => 'required|string',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'zip' => 'required|string|max:15',
            'country' => 'required|string|max:100',
            'message' => 'required|string|min:10',
        ]);

        // 2. Fetch OTP record
        $record = EmailOtp::where('email', $request->email)
            ->where('expires_at', '>=', now())
            ->first();

        if (!$record) {
            return response()->json([
                'status' => 'not_found',
                'message' => 'OTP not found. Please request again.'
            ], 404);
        }

        // 3. Check expiry
        if (now()->gt($record->expires_at)) {
            return response()->json([
                'status' => 'expired',
                'message' => 'OTP expired. Please request again.'
            ], 410);
        }

        // 4. Verify hash
        if (!Hash::check($request->otp, $record->otp)) {
            return response()->json([
                'status' => 'invalid',
                'message' => 'Invalid OTP.'
            ], 422);
        }

        $contact = Contact::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_name' => $request->company_name,
            'solutions' => $request->solutions,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'address' => $request->address,
            'application' => $request->application,
            'type' => 1, // SAMPLE REQUEST
            'message' => $request->message,
        ]);




        Mail::to($contact->email)->send(new UserThankYouMail($contact));
        Mail::to(config('mail.admin_email'))->send(new AdminContactNotificationMail($contact));

        $record->delete();


        return response()->json([
            'status' => 'success',
            'message' => 'Thank you! Your request has been submitted.'
        ]);
    }


    public function storeContact(Request $request)
    {
        // 1. Validate form strictly
        $validated = $request->validate([
            'f_name' => ['required', 'string', 'max:100'],
            'l_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'regex:/^[0-9+\-\s]{8,20}$/'],
            'company_name' => ['required', 'string', 'max:150'],
            'solutions' => ['required'],
            'city' => ['required', 'string', 'max:100'],
            'state' => ['required', 'string', 'max:100'],
            'zip' => ['required', 'string', 'max:15'],
            'country' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string', 'min:10'],
            'application' => ['required', 'string', 'min:10'],
            'address' => ['required', 'string', 'max:100'],
            'otp' => ['required', 'digits:6'],
        ]);

        // 2. Fetch OTP record
        $record = EmailOtp::where('email', $request->email)
            ->where('expires_at', '>=', now())
            ->first();

        if (!$record) {
            return response()->json([
                'status' => 'not_found',
                'message' => 'OTP not found. Please request again.'
            ], 404);
        }

        // 3. Check expiry
        if (now()->gt($record->expires_at)) {
            return response()->json([
                'status' => 'expired',
                'message' => 'OTP expired. Please request again.'
            ], 410);
        }

        // 4. Verify hash
        if (!Hash::check($request->otp, $record->otp)) {
            return response()->json([
                'status' => 'invalid',
                'message' => 'Invalid OTP.'
            ], 422);
        }

        // 5. Prevent spam duplicates (same email same day)
        // if (
        //     Contact::where('email', $validated['email'])
        //         ->whereDate('created_at', today())
        //         ->exists()
        // ) {
        //     return response()->json([
        //         'status' => 'duplicate',
        //         'message' => 'You have already submitted today.'
        //     ], 409);
        // }

        // 6. Save contact
        $contact = Contact::create([
            'f_name' => $validated['f_name'],
            'l_name' => $validated['l_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'company_name' => $validated['company_name'],
            'solutions' => $validated['solutions'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip' => $validated['zip'],
            'country' => $validated['country'],
            'address' => $validated['address'],
            'application' => $validated['application'],
            'type' => 2,// CONTACT REQUEST
            'message' => $validated['message'],
        ]);

        // 7. Send emails
        Mail::to($contact->email)
            ->send(new UserThankYouMail($contact));

        Mail::to(config('mail.admin_email'))
            ->send(new AdminContactNotificationMail($contact));

        // 8. Delete OTP after success
        $record->delete();

        // 9. Final response for SweetAlert
        return response()->json([
            'status' => 'success',
            'message' => 'Thank you! Your request has been submitted.'
        ]);
    }

    public function apply_career(Request $request)
    {
        $record = EmailOtp::where('email', $request->email)
            ->where('expires_at', '>=', now())
            ->first();

        if (!$record || !Hash::check($request->otp, $record->otp)) {
            return response()->json(['status' => 'error', 'message' => 'Invalid OTP']);
        }

        $career = CareerApplication::create([
            'job_id' => $request->job_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'resume' => $request->resume,
        ]);

        Mail::to(config('mail.admin_email'))->send(new CareerAdminMail($career));
        Mail::to($career->email)->send(new CareerUserMail($career));

        $record->delete();

        return response()->json(['status' => 'success']);
    }
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $otp = rand(100000, 999999);

        EmailOtp::where('email', $request->email)->delete();

        EmailOtp::create([
            'email' => $request->email,
            'otp' => Hash::make($otp),
            'expires_at' => now()->addMinutes(10)
        ]);

        Mail::to($request->email)->send(new OtpMail($otp));

        return response()->json(['status' => 'success']);
    }

    public function all_events()
    {
        $today = Carbon::today();

        // Future events (from_date >= today)
        $futureEvents = Event::where('from_date', '>=', $today)
            ->orderBy('from_date', 'asc')
            ->get();

        // Other events (from_date < today)
        $otherEvents = Event::where('from_date', '<', $today)
            ->orderBy('from_date', 'desc')
            ->get();

        return view('events', compact('futureEvents', 'otherEvents'));
    }

    public function show_event($id)
    {
        $event = Event::findOrFail($id);

        return view('event_detail', compact('event'));
    }
    public function show_blog($id)
    {
        $blog = Blog::where('slug', $id)
            ->where('status', 1)
            ->firstOrFail();

        return view('blog_detail', compact('blog'));
    }
    public function all_chemicals(Request $request)
    {
        $search = $request->input('searchProduct');

        $products = Chemicals::with('categories')
            ->when($search, function ($query, $search) {
                $query->where('chemical_name', 'like', "%{$search}%")
                    ->orWhere('synonyms', 'like', "%{$search}%")
                    ->orWhere('chemical_registry', 'like', "%{$search}%");
            })
            ->orderBy('chemical_name')
            ->paginate(15);

        return view('chemicals', compact('products', 'search'));
    }




    public function show_chemical($id)
    {
        $product = Chemicals::with(['categories', 'images'])->findOrFail($id);
        return view('chemical_detail', compact('product'));
    }

}
