<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('front.content.category');
    }

    public function show($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('front.content.category', compact('category', 'categories'));
    }
}
