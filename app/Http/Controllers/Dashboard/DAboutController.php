<?php

namespace App\Http\Controllers\Dashboard;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DAboutController extends Controller
{
    public function index()
    {
        $about = About::find(1);
        return view('dashboard.about', compact('about'));
    }

    public function update(Request $request)
    {
        $about = About::find(1);
        $about->video = $request->video;
        $about->head_title_en = $request->head_title_en;
        $about->head_title_ar = $request->head_title_ar;
        $about->head_description_en = $request->head_description_en;
        $about->head_description_ar = $request->head_description_ar;
        $about->body_title_1_en = $request->body_title_1_en;
        $about->body_title_1_ar = $request->body_title_1_ar;
        $about->body_description_1_en = $request->body_description_1_en;
        $about->body_description_1_ar = $request->body_description_1_ar;
        $about->body_title_2_en = $request->body_title_2_en;
        $about->body_title_2_ar = $request->body_title_2_ar;
        $about->body_description_2_en = $request->body_description_2_en;
        $about->body_description_2_ar = $request->body_description_2_ar;
        $about->body_title_3_en = $request->body_title_3_en;
        $about->body_title_3_ar = $request->body_title_3_ar;
        $about->body_description_3_en = $request->body_description_3_en;
        $about->body_description_3_ar = $request->body_description_3_ar;
        $about->header_sec1_en = $request->header_sec1_en;
        $about->header_sec1_ar = $request->header_sec1_ar;
        $about->header_sec2_en = $request->header_sec2_en;
        $about->header_sec2_ar = $request->header_sec2_ar;

        if($request->hasFile('header_image')){
            File::delete('public/header/'.$about->header_image);
            Storage::disk('local')->delete('public/header/'.$about->header_image);

            $imageurl = $request->file('header_image');
            $imageurl->getClientOriginalName();
            $ext    = $imageurl->getClientOriginalExtension();
            $file   = date('YmdHis').rand(1,99999).'.'.$ext;
            $imageurl->storeAs('public/header', $file);

            $about->header_image = $file;
        }


        $about->save();


        toastr()->success('updated successfully');
        return redirect()->back();
    }
}
