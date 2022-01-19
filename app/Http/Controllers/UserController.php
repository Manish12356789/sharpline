<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Bathroom;
use App\Models\Bedroom;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Career;
use App\Models\CompanyContact;
use App\Models\Contact;
use App\Models\Frequency;
use App\Models\service;
use App\Models\SliderImage;
use App\Models\Testimonial;
use App\Models\Package;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $services = service::all();
        $testimonials = Testimonial::all();
        $sliders = SliderImage::all();
        $blogs = Blog::all();
        return view('welcome', ['services'=>$services, 'testimonials'=>$testimonials, 'sliders'=> $sliders, 'blogs'=> $blogs
    ]);
    }

    public function services()
    {
        $services = service::all();
        return view('services',['services'=>$services]);
    }

    public function packages()
    {
        $packages = Package::all();
        return view('packages', ['packages'=>$packages]);
    }

    public function contact()
    {
        $contact = CompanyContact::where('id', '=', 1)->get();
        return view('contact', ['contact'=>$contact]);
    }

    public function careers()
    {
        return view('careers');
    }

    public function book()
    {
        $services = service::all();
        $bedroom = Bedroom::where('id', '=', 1)->get();
        $bathroom = Bathroom::where('id', '=', 1)->get();
        dd("bedroom:",$services);
        $frequency = Frequency::all();
        return view('book', ['services'=>$services, 'bedroom'=>$bedroom, 'bathroom'=>$bathroom, 'frequency'=>$frequency]);
    }

    public function blog()
    {
        $blogs = Blog::all();
        $recent = Blog::all()->take(3);
        return view('blog', ['blogs'=>$blogs, 'recent'=>$recent]);
    }

    public function about()
    {
        $about = About::first();
        return view('about', ['about'=>$about]);
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

    public function saveBook(Request $request)
    {
        $saving = new Book();
        $saving->bedroom = $request->bedroom;
        $saving->bathroom = $request->bathroom;
        $saving->extra = $request->service;
        $saving->zip = $request->zip;
        $saving->email = $request->email;
        $saving->date = $request->date;
        $saving->fname = $request->fname;
        $saving->lname = $request->lname;
        $saving->address = $request->address;
        $saving->phone = $request->phone;
        $saving->alt_phone = $request->alt_phone;
        $saving->notes = $request->notes;
        $saving->save();
        return redirect()->route('home');
    }

    public function search(Request $request){
        $search_text = $request->search;
        $result = service::where('title','LIKE','%'.$search_text.'%')
                ->orWhere('description','LIKE','%'.$search_text.'%')
                ->get();
        return view('services', ['services'=>$result]);
    }
}
