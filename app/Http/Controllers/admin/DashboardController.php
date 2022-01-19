<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('authadmin');
    }

    public function index()
    {
        $services = service::all();
        $bookings = Book::all();
        return view('admin.dashboard', ['bookings'=>$bookings, 'services'=>$services]);
    }
}
