<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function tf(){
        $title = 'Techfest';
        return view('pages.techfest.tf')->with('title', $title);
    }

    public function tflogin(){
        $title = 'Techfest Login';
        return view('pages.techfest.login');
    }

    // public function tfregister(){
    //     $title = 'Techfest Register';
    //     return view('pages.techfest.register');
    // }
}
