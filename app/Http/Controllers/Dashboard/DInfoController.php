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
        $info = Info::find(1);
        $info->phone    = $request->phone;
        $info->email    = $request->email;
        $info->location_en  = $request->location_en;
        $info->location_ar  = $request->location_ar;
        $info->whatsapp_link = $request->whatsapp_link;
        $info->save();

        toastr()->success('updated successfully');
        return redirect()->back();
    }
}
