<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $title = "Welcome to my page";
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
           'title' => 'Welcome to services page',
            'services' => ['Programming', 'CyberSecurity', 'Networking']
        );
        return view('pages.services')->with($data);
    }

    public function home(){
        return view('home');
    }

}
