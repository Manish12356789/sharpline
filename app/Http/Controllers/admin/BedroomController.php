<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bedroom;
use Illuminate\Http\Request;

class BedroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bedrooms = Bedroom::first();
        return view('admin.book.bedroom', ['bedroom' => $bedrooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.addBedroom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new Bedroom();
        $saving->limit = $request->limit;
        $saving->rate = $request->rate;
        $saving->save();
        return redirect()->route('admin.book.bedroom');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bedrooms = Bedroom::find($id);
        return view('admin.book.editBedroom', ['bedrooms' => $bedrooms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $saving = Bedroom::find($id);
        $saving->limit = $request->limit;
        $saving->rate = $request->rate;
        $saving->save();
        return redirect()->route('admin.book.bedroom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $br = Bedroom::find($id);
        $br->delete();
        return redirect()->route('admin.book.bedroom');
    }
}
