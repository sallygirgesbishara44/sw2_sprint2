<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;
use App\Customer;


class customerscontroller extends Controller
{
    public function register(){
        return view('reg');
    }

    public function store(Request $request){
        $request->validate([ 
                'firstname'=>'required',
                'lastname'=>'required',
                'adress'=>'required|min:4',
                'email'=>'required|email',
                'username'=>'required|unique:customers,user_name',
                'password'=>'required|min:5',

                
            ]);
       $customer = new customer();
       $customer->first_name = $request->firstname ;
       $customer->last_name = $request->lastname ;
       $customer->user_name = $request->username ;
       $customer->address = $request->adress ;
       $customer->e_mail = $request->email ;
       $customer->password = $request->password ;
       
       $customer->save();
       return redirect('/register/submit')->with('status','you are successfully registered !');
    }

public function login (){
    return view('login');
}

    public function logs(request $request){
        
     
        $request->validate([ 
            
            'username'=>'required',
            'password'=>'required|min:5',

            
        ]);
        
        $username =$request->input('username');
        $password =$request->input('password');
   $data = DB::select('select id from customers where user_name=? and password=?',[$username,$password]);
   
if (count($data)){
    $Sdata = $data[0]->id;
    $request->session()->put('user',$Sdata);
    return view('dashboard',['tata'=>$username])->with('thedata',$request->session()->get('user'));
   
}
else {
    return redirect('/login')->with('status','please enter valid data ');
}    }
}

