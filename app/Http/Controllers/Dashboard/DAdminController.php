<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DAdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('dashboard.admins', compact('users'));
    }

    public function makeAdmin($id)
    {
        $user = User::find($id);

        if($user->hasRole('admin')){
            $user->removeRole('admin');
        }else{
            $user->assignRole('admin');
        }

        return redirect()->back();
    }

}
