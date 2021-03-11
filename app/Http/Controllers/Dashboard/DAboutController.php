<?php

namespace App\Http\Controllers\Dashboard;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DAboutController extends Controller
{
    public function index()
    {
        $about = About::find(1);
        return view('dashboard.about', compact('about'));
    }
}
