<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function index()
    {
        $All = EventCategory::with('getEvent')->orderBy('rank')->get();
        return view('backend.eventcategory.index', compact('All'));
    }
}
