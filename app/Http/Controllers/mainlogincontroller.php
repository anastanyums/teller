<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainlogincontroller extends Controller
{
    public function complain(){

          return view ('complain');
    }
  public function newcomplain(){

        return view ('newcomplain');
  }

  public function store(Request $request)
    {
        $complain = $request->input('complain');

        dd($complain);

    }
}
