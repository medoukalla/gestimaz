<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    // index page 
    public function index() {
        return view('index');
    }

    // contact page 
    public function contact() {
        return view('contact');
    }

    // services page 
    public function services() {
        return view('services');
    }


    // faq page 
    public function faq() {
        return view('faq');
    }

    // projects page 
    public function projects() {
        return view('projects');
    }

    // team page 
    public function team() {
        return view('team');
    }

}
