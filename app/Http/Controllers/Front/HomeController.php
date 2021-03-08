<?php

namespace App\Http\Controllers\Front;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('front.content.home', compact('categories'));
    }
}
