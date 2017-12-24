<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    //

    public function about()
    {

        $title = 'About ';
        $description = "Hi, I'm Eddie Solar, a web developer from Miami, FL. I have experience coding websites using modern HTML, CSS / Sass, JavaScript / jQuery, PHP, SQL and WordPress I have a passion for expanding my craft, building thing for the web and staying on the bleeding edge.";
        $description_2 = 'You can check out some of my work on Github and Codepen';

        return view('about', compact('title', 'description', 'description_2'));
    }


}
