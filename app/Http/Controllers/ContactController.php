<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('pages.admin_phonebook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('pages.addcontact');
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
        $message=[
            'required' => 'This credential field is required!'
        ];
        $request->validate([
            'name'=>'required',
            'num'=>'required',
            'mail'=>'required|email',
            'aff'=>'required'


        ],$message);
        contact::create($request->all());
        return redirect()->route('phonebook_showdata')
                        ->with('success', 'Contact Registered Successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
        $data= contact::all();
        return view ('pages.admin_phonebook', ['contacts'=>$data]);
    }

    public function showdata($id)
    {
        //
        $data=contact::find($id);   
        return view ('pages.admin_phonebookupdate',['contacts'=>$data]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=contact::find($id);
        return view ('pages.admin_phonebookupdate',['contacts'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $message=[
            'required' => 'This credential field is required!'
        ];
        $request->validate([
            'name'=>'required',
            'num'=>'required',
            'mail'=>'required|email',
            'aff'=>'required'],$message);

        $contacts=contact::find($request->id);
        $contacts->name=$request->name;
        $contacts->num=$request->num;    
        $contacts->mail=$request->mail;
        $contacts->aff=$request->aff;
        $contacts->save();
        return redirect()->route('phonebook_showdata')
        ->with('success', 'Contact, Updated Successfully');

    }

    /**
     * Remove the specified resource f  rom storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroycontact($id)
    {
        //
        $contacts=contact::find($id);
        $contacts->delete();
        return redirect()->route('phonebook_showdata')
        ->with('success', 'Contact, Deleted Successfully');
    }
}
