<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;

class DTeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.teams', compact('teams'));
    }
}
