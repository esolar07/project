<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    //

    public function about()
    {

        $title = 'Intro to Laravel';
        $group = 'Miami SoFlo PHP';
        $sections = ['Set up', 'Laradock', 'Routing', 'Views', 'Controllers'];

        return view('about', compact('title', 'group', 'sections'));
    }

    public function aboutVersion($id)
    {
        $version = $id;
        $title = ' Laravel ' . $id;
        $sections = ['Set up', 'Laradock', 'Routing', 'Views', 'Controllers'];

        return view('aboutVersion', compact('title', 'sections'));

    }
}
