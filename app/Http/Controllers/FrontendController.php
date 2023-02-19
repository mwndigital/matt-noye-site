<?php

namespace App\Http\Controllers;

use App\Models\HireMeSubmissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.homepage');
    }

    public function hireMeStore(Request $request) {
        $request->validate([
            'type_of_business' => 'required',
            'project_budget' => 'required',
            'designCreatedOrProvided' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email_address' => 'required|max:255|email'
        ]);

        $submission = HireMeSubmissions::create([
            'type_of_business' => $request->input('type_of_business'),
            'project_budget' => $request->input('project_budget'),
            'required_pages' => $request->input('required_pages'),
            'designCreatedOrProvided' => $request->input('designCreatedOrProvided'),
            'websitesForInspiration' => $request->input('websitesForInspiration'),
            'project_start_date' => $request->input('project_start_date'),
            'project_complete_date' => $request->input('project_complete_date'),
            'other_details' => $request->input('other_details'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email_address' => $request->input('email_address'),
            'phone_number' => $request->input('phone_number'),
        ]);

        // Send email
        $email_data = [
            'submission' => $submission,
        ];

        Mail::send('emails.hire_me_email', $email_data, function ($message) use ($email_data){
            $message->from('no-reply@matt-noye.co.uk', 'Hire Me Contact form');
            $message->to('hello@matt-noye.co.uk');
            $message->subject('Hire me form submission');
        });

        return redirect()->back()->with('success', 'Thank you for submitting your project details, I will be in touch within 24 hours');
    }
}
