<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyContact;
use Illuminate\Http\Request;

class CompanyContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = CompanyContact::all();
        return view('admin.contacts.companyContacts', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.addCompanyContacts');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacts = new CompanyContact();
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->street = $request->street;
        $contacts->district = $request->district;
        $contacts->postal = $request->postal;
        $contacts->state = $request->state;
        $contacts->country = $request->country;
        $contacts->save();
        return redirect()->route('admin.companyContacts');
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
        $contacts = CompanyContact::find($id);
        return view('admin.contacts.editCompanyContact', ['contacts'=>$contacts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacts = CompanyContact::find($id);
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->street = $request->street;
        $contacts->district = $request->district;
        $contacts->postal = $request->postal;
        $contacts->state = $request->state;
        $contacts->country = $request->country;
        $contacts->save();
        return redirect()->route('admin.companyContacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacts = CompanyContact::find($id);
        $contacts->delete();
        return redirect()->route('admin.companyContacts');
    }
}
