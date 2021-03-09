<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail;
use Illuminate\Http\Request;

class DMailController extends Controller
{
    public function index(){

        $mails = Mail::select( 'id', 'name', 'subject', 'email')->get();
        return view('dashboard.mailbox', compact('mails'));
    }

    public function show($id){

        $mail = Mail::find($id);
        return view('dashboard.read-mail', compact('mail'));
    }

    public function delete($id)
    {
        $mail = Mail::find($id);
        $mail->delete();

        return redirect()->route('dashboard.mail');
    }
}