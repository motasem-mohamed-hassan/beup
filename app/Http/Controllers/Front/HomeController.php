<?php

namespace App\Http\Controllers\Front;

use App\Info;
use App\Mail;
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
                'position_'.LaravelLocalization::getCurrentLocale().' as position',
                'image')->get();
        $info = Info::select('phone', 'email', 'location_'.LaravelLocalization::getCurrentLocale().' as location',
                    'whatsapp_link')->first();

        return view('front.content.home', compact('categories', 'team', 'info'));
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
