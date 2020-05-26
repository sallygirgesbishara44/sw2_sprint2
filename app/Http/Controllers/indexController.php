<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index ()
    {
      $title = "index";
      return view('welcome')->with('title', $title);
    }
}
