<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Info;
use Illuminate\Http\Request;

class DInfoController extends Controller
{
    public function index()
    {
        $info = Info::find('1');

        return view('dashboard.info', compact('info'));
    }

    public function update(Request $request)
    {
        Info::find(1)->update($request->all());

        toastr()->success('updated successfully');
        return redirect()->back();
    }
}
