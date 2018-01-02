<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeakingPageController extends Controller
{
    public function speaking(){

        return view('speaking');

    }
}
