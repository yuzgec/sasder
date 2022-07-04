<?php

namespace App\Http\Controllers;

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
        $Faq = Faq::count();
        $User = UserDetails::with('getUser')->get();
        $Form = Form::paginate(10);
        //dd($User);
        return view('backend.index', compact('Project', 'Video', 'Team', 'Faq', 'Form', 'User'));
    }
}
