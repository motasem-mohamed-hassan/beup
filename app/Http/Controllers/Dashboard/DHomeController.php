<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DHomeController extends Controller
{
    public function index()
    {
        return view('Dashboard.home');
    }
}
