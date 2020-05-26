<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;

class FeedbackController extends Controller
{
    //
    function saveFeedback(Request $req)
    {
      $feedback= new feedback;
      $feedback-> name = $req -> input('name');
      $feedback-> email = $req -> input('email');
      $feedback-> message = $req -> input('message');
      $feedback-> save();
    }
    public function feedback(){
      $title = 'Feedback';
      return view('feedback')->with('title', $title);
    }
}
