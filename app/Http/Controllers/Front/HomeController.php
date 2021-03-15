<?php

namespace App\Http\Controllers\Front;

use App\About;
use App\Info;
use App\Logo;
use App\Mail;
use App\Post;
use App\Team;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'name_'.LaravelLocalization::getCurrentLocale().' as name')->get();

        $team = Team::select('id', 'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'position_'.LaravelLocalization::getCurrentLocale().' as position','image'
        )->get();

        $info = Info::select('phone', 'email', 'location_'.LaravelLocalization::getCurrentLocale().' as location',
            'whatsapp_number', 'location_link', 'facebook_link', 'twitter_link', 'instagram_link', 'linkedin_link'
        )->first();

        $posts = Post::select('image')->get();

        $logos = Logo::select('id', 'name', 'words_'.LaravelLocalization::getCurrentLocale().' as words', 'image')->get();

        $about = About::select('id', 'video', 'head_title_'.LaravelLocalization::getCurrentLocale().' as head_title',
            'head_description_'.LaravelLocalization::getCurrentLocale().' as head_description',
            'body_title_1_'.LaravelLocalization::getCurrentLocale().' as body_title_1',
            'body_description_1_'.LaravelLocalization::getCurrentLocale().' as body_description_1',
            'body_title_2_'.LaravelLocalization::getCurrentLocale().' as body_title_2',
            'body_description_2_'.LaravelLocalization::getCurrentLocale().' as body_description_2',
            'body_title_3_'.LaravelLocalization::getCurrentLocale().' as body_title_3',
            'body_description_3_'.LaravelLocalization::getCurrentLocale().' as body_description_3',
            'header_sec1_'.LaravelLocalization::getCurrentLocale().' as header_sec1',
            'header_sec2_'.LaravelLocalization::getCurrentLocale().' as header_sec2',
            'header_image'

        )->first();

        return view('front.content.home', compact('categories', 'team', 'info', 'posts', 'logos', 'about'));
    }

    public function sendMail(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' =>'required',
            'message'=> 'required',
        ]);
        Mail::create($request->all());

        \Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'messages' => $request->get('message')
            ), function($message) use ($request)
        {
            $message->from($request->email);
            $message->to('melhofy20@gmail.com', 'Admin')->subject($request->subject);
        });

        return redirect()->back();
    }

}
