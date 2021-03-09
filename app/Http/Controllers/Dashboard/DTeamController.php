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

    public function store(Request $request)
    {
        $team = new Team();
        $team->name_ar  =   $request->name_ar;
        $team->name_en  =   $request->name_en;
        $team->position_en  =   $request->position_en;
        $team->position_ar  =   $request->position_ar;

        $imageurl = $request->file('image');
        $imageurl->getClientOriginalName();
        $ext    = $imageurl->getClientOriginalExtension();
        $file   = date('YmdHis').rand(1,99999).'.'.$ext;
        $imageurl->storeAs('public/avatars', $file);

        $team->image = $file;
        $team->save();

        toastr()->success('Created Successfully');
        return redirect()->route('dashboard.teams.index');
    }
}
