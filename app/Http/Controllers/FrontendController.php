<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;
use App\Mail\UserThankYouMail;
use App\Mail\AdminContactNotificationMail;

class FrontendController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about_us()
    {
        return view('aboutus');
    }

    public function Career()
    {
        return view('career');
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
        return view('priclinical_services');
    }

    public function clinical_services()
    {
        return view('clinical_services');
    }

    public function manufacturing_analytic()
    {
        return view('manufacturing_analytic');
    }

    public function formulation_development()
    {
        return view('formulation_development');
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
            'type' => 1, // SAMPLE REQUEST
            'message' => $request->message,
        ]);

        Mail::to($contact->email)->send(new UserThankYouMail($contact));
        Mail::to(config('mail.admin_email'))->send(new AdminContactNotificationMail($contact));

        return back()->with('success', 'Sample request submitted successfully.');
    }


    public function storeContact(Request $request)
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
            'type' => 2, // CONTACT REQUEST
            'message' => $request->message,
        ]);

        Mail::to($contact->email)->send(new UserThankYouMail($contact));
        Mail::to(config('mail.admin_email'))->send(new AdminContactNotificationMail($contact));

        return back()->with('success', 'Thank you for contacting us.');
    }
}
