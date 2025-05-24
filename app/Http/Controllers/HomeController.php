<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactQueryMail;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        return view('pages.home');
    }
    public function About(){
        return view('pages.about');
    }
    public function Contact(){
        return view('pages.contact');
    }

    public function saveQuery(Request $request){
        // return $request->all();
        if($request->query_form){
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ];
        }else{
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
        }
    
        Mail::to('jeetsinghtraders1111@gmail.com')->send(new ContactQueryMail($details));
    
        return back()->with('success', 'Your query has been sent successfully!');
    
    }
}
