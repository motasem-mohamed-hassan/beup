<?php

namespace App\Http\Controllers\Dashboard;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DPostController extends Controller
{

    public function create($id)
    {
        $category_id = $id;

        return view('dashboard.createPost', compact('category_id'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->category_id = $request->category_id;
        $post->title_en     = $request->title_en;
        $post->title_ar     = $request->title_ar;
        $post->body_en     = $request->body_en;
        $post->body_ar     = $request->body_ar;
        $post->link         = $request->link;


        $imageurl = $request->file('image');
        $imageurl->getClientOriginalName();
        $ext    = $imageurl->getClientOriginalExtension();
        $file   = date('YmdHis').rand(1,99999).'.'.$ext;
        $imageurl->storeAs('public/posts', $file);

        $post->image = $file;
        $post->save();

        toastr()->success('Created successfully');
        return redirect()->route('dashboard.categories.index');
    }

    public function index()
    {
        $posts = post::all();

        return view('dashboard.posts', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('dashboard.singlePost', compact('post'));
    }

    public function update(Request $request,$id)
    {
        $post = Post::find($id);
        $post->title_en     =   $request->title_en;
        $post->title_ar     =   $request->title_ar;
        $post->body_en      =   $request->body_en;
        $post->body_ar      =   $request->body_ar;
        $post->title_en     =   $request->title_en;


        if($request->hasFile('image')){
            File::delete('public/posts/'.$post->image);
            Storage::disk('local')->delete('public/posts/'.$post->image);

            $posturl = $request->file('image');
            $posturl->getClientOriginalName();
            $ext    = $posturl->getClientOriginalExtension();
            $file   = date('YmdHis').rand(1,99999).'.'.$ext;
            $posturl->storeAs('public/posts', $file);

            $post->image = $file;
        }
        $post->save();

        toastr()->success('Updated Successfully');
        return redirect()->route('dashboard.posts.index');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        File::delete($post->image);
        Storage::disk('local')->delete('public/posts/'.$post->image);
        $post->delete();

        toastr()->success('Deleted successfully');
        return redirect()->route('dashboard.posts.index');
    }

}
