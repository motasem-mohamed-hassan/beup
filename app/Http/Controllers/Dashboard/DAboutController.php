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

    public function update(Request $request)
    {
        About::find(1)->update($request->all());

        toastr()->success('updated successfully');
        return redirect()->back();
    }
}
