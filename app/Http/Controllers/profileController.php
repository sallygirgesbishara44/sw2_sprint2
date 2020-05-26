<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        return view('profile.show', [ 'profile' => \App\Customer::findOrFail($id)])->with('id',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $profile = \App\Customer::findOrFail($id);
        return view('profile.edit',['profile' => $profile]);
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
        //
        $profile = \App\Customer::findOrFail($id);
         $validatedData =$request->validate([
             'firstname'  => 'bail|required|max:40',
             'lastname'  => 'bail|required|max:40',
             
             'email' => 'required|email',
             'adress'  =>  'required|min:4',
             'username'  => 'bail|required|max:30',
             'password'  => 'bail|required|max:15|min:5',
         ]
         );

        $profile->first_name  = $request->input('firstname');
      //  $profile->customer_phone = $request->input('Phone');
        $profile->e_mail = $request->input('email');
        
        $profile->last_name  = $request->input('lastname');
        $profile->address = $request->input('adress');
        $profile->user_name = $request->input('username');
        $profile->password = $request->input('password');

        $profile->save();
        $request->session()->flash('status', 'The profile is updated');
        return redirect()->route('profile.show',['profile' => $profile->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
