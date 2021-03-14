<?php

namespace App\Http\Controllers\Front;

use App\Info;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::find($id);

        $this_category = Category::where('id', $id)->select('id','name_'.LaravelLocalization::getCurrentLocale().' as name',
            'description_'.LaravelLocalization::getCurrentLocale().' as description'
        )->first();

        $categories = Category::select('id', 'name_'.LaravelLocalization::getCurrentLocale().' as name')->get();

        $posts = Post::where('category_id', $id)->select('id', 'title_'.LaravelLocalization::getCurrentLocale().' as title',
            'body_'.LaravelLocalization::getCurrentLocale().' as body', 'image', 'link'
        )->get();

        $info = Info::select('phone', 'email', 'location_'.LaravelLocalization::getCurrentLocale().' as location',
            'whatsapp_number', 'location_link', 'facebook_link', 'twitter_link', 'instagram_link', 'linkedin_link'
        )->first();

        return view('front.content.category', compact('category', 'categories', 'posts', 'info', 'this_category'));
    }
}
