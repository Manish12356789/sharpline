<?php

namespace App\Http\Controllers;

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
}
