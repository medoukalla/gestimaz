<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Question;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    // index page 
    public function index() {
        return view('index',[
            'services' => Service::get_services(),
            'projects' => Project::get_projects(),
            'members'  => User::get_4_team_members(),
        ]);
    }

    // contact page 
    public function contact() {
        return view('contact');
    }

    // services page 
    public function services() {
        return view('services', [
            'services' => Service::get_all_services(),
        ]);
    }


    // faq page 
    public function faq() {
        return view('faq',[
            'questions' => Question::get_all_questions(),
        ]);
    }

    // projects page 
    public function projects() {
        return view('projects',[
            'projects' => Project::get_all_projects(),
        ]);
    }

    // team page 
    public function team() {
        return view('team',[
            'projects' => Project::get_all_projects(),
            'members'  => User::get_all_team_members(),
        ]);
    }

}