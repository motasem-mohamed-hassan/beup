<?php

namespace App\Http\Controllers\Dashboard;

use App\Logo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DLogosController extends Controller
{
    public function index()
    {
        $logos = Logo::all();
        return view('dashboard.logos', compact('logos'));
    }

    public function store(Request $request)
    {
        $logo = new Logo();
        $logo->name     =   $request->name;
        $logo->words_en    =   $request->words_en;
        $logo->words_ar    =   $request->words_ar;


        $imageurl = $request->file('image');
        $imageurl->getClientOriginalName();
        $ext    = $imageurl->getClientOriginalExtension();
        $file   = date('YmdHis').rand(1,99999).'.'.$ext;
        $imageurl->storeAs('public/logos', $file);

        $logo->image = $file;
        $logo->save();

        return redirect()->back();
    }


    public function delete($id)
    {
        $logo = Logo::find($id);
        File::delete($logo->image);
        Storage::disk('local')->delete('public/logos/'.$logo->image);
        $logo->delete();

        return redirect()->back();
    }
}
