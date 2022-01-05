<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::all();
        return view('admin.careers.career', ['careers' => $careers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $career = Career::find($id);
        return view('admin.careers.editcareer', ['career'=>$career]);
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
        $saving = Career::find($id);
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
        return redirect()->route('admin.career'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect()->route('admin.career');
    }
}
