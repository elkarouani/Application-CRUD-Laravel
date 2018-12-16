<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Welcome To Laravel!';
    	// return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Page';
    	return view('pages.about', compact('title'));
    }

    public function services(){
        $data = array(
            'title'    => 'Services',
            'services' => ['Web design', 'Programming', 'SEO']
        );
    	return view('pages.services', $data);
    }
}
