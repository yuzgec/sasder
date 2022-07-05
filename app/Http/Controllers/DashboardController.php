<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Form;
use App\Models\Team;
use App\Models\UserDetails;
use App\Models\Video;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index(){
        $Project = Project::count();
        $Team = Team::count();
        $Event = Event::count();
        $User = UserDetails::with('getUser')->paginate(10);
        $Form = Form::limit(10)->get();
        //dd($User);
        return view('backend.index', compact('Project','Team', 'Form', 'User', 'Event'));
    }
}
