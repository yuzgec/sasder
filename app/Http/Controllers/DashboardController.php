<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Faq;
use App\Models\Form;
use App\Models\Team;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\Video;
use App\Models\Project;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index(){
        $Project = Project::count();
        $Video = Video::count();
        $Team = Team::count();
        $Event = Event::count();
        $User = UserDetails::with('getUser')->paginate(3);
        $Form = Form::limit(10)->get();
        //dd($User);
        return view('backend.index', compact('Project', 'Video', 'Team', 'Form', 'User', 'Event'));
    }
}
