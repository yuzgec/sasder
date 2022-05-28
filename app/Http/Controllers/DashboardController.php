<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Team;
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
        $Activity = Activity::all()->last();


        return view('backend.index', compact('Project', 'Video', 'Team', 'Faq', 'Activity'));
    }
}
