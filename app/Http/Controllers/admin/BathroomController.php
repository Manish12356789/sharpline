<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bathroom;
use Illuminate\Http\Request;

class BathroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bathrooms = Bathroom::first();
        return view('admin.book.bathroom', ['bathrooms' => $bathrooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.addBathroom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new Bathroom();
        $saving->limit = $request->limit;
        $saving->rate = $request->rate;
        $saving->save();
        return redirect()->route('admin.book.bathroom');
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
        $bathrooms = Bathroom::find($id);
        return view('admin.book.editBathroom', ['bathrooms' => $bathrooms]);
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
        $saving = Bathroom::find($id);
        $saving->limit = $request->limit;
        $saving->rate = $request->rate;
        $saving->save();
        return redirect()->route('admin.book.bathroom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $br = Bathroom::find($id);
        $br->delete();
        return redirect()->route('admin.book.bathroom');
    }
}
