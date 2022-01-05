<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Contact;
use App\Models\service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $services = service::all();
        return view('welcome', ['services'=>$services]);
    }

    public function services()
    {
        return view('services');
    }

    public function packages()
    {
        return view('packages');
    }

    public function contact()
    {
        return view('contact');
    }

    public function careers()
    {
        return view('careers');
    }

    public function book()
    {
        return view('book');
    }

    public function blog()
    {
        return view('blog');
    }

    public function about()
    {
        return view('about');
    }

    public function service($id)
    {
        $service = service::find($id);
        $all_services = service::all()->except($id);
        return view('service', ['service'=>$service, 'all_services'=>$all_services]);
    }

    public function saveCareer(Request $request)
    {
        $saving = new Career();
        $saving->fname = $request->fname;
        $saving->lname = $request->lname;
        $saving->address = $request->address;
        $saving->service = $request->service;
        $saving->phone = $request->phone;
        $saving->alt_phone = $request->alt_phone;
        if(request()->document){
            $filename = time() . '.' . request()->document->getClientOriginalExtension();
            request()->document->move(public_path('images/career'), $filename);
            $saving->document = $filename;
        }else
        {
            $saving->image = 'file';
        }

        if(request()->image){
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/career'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->message = $request->message;
        $saving->save();
        return redirect()->route('home'); 
    }

    public function saveContact(Request $request)
    {
        $saving = new Contact();
        $saving->full_name = $request->name;
        $saving->email = $request->email;
        $saving->subject = $request->subject;
        $saving->message = $request->message;
        $saving->save();
        return redirect()->route('home');
    }
}
