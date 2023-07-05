<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $models = Blog::all();
        return view('admin.blog.index',compact('models'));
    }

    public function create()
    {
        return view('admin.blog.form');
    }


    public function store(BlogRequest $blogRequest)
    {
        $data = $blogRequest->validated();
        if ($blogRequest->has('image')){
            $name = \Illuminate\Support\Str::uuid()->toString(). '.'.$blogRequest->image->extension();
            $blogRequest->image->storeAs('public', $name);
            $data['image'] = $name;
        }
        Blog::create($data);
        return redirect()->route('blog.index');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.form', compact('blog'));
    }

    public function update(BlogRequest $blogRequest,Blog $blog)
    {
        $data = $blogRequest->validated();
        if ($blogRequest->has('image')){
            $name = \Illuminate\Support\Str::uuid()->toString(). '.'.$blogRequest->image->extension();
            $blogRequest->image->storeAs('public', $name);
            $data['image'] = $name;
            Storage::disk('public')->delete($blog->image);
        }
        $blog->update($data);
        return redirect()->back();
    }


    public function destroy(Blog $blog)
    {
        Storage::disk('public')->delete($blog->image);
        $blog->delete();
        return redirect()->back();
    }
}

