<?php

namespace App\Http\Controllers\Front;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CategoryController extends Controller
{
    public function index()
    {
        return view('front.content.category');
    }

    public function show($id)
    {
        $category = Category::find($id);
        $posts = Post::where('category_id', $id)
            ->select('id', 'title_'.LaravelLocalization::getCurrentLocale().' as title',
             'body_'.LaravelLocalization::getCurrentLocale().' as body',
             'image', 'link')->get();
        $categories = Category::all();
        return view('front.content.category', compact('category', 'categories', 'posts'));
    }
}
