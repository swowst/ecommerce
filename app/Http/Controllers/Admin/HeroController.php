<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\HeroRequest;
use App\Models\Blog;
use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function index()
    {
        $models = Hero::all();
        return view('admin.hero.index',compact('models'));
    }

    public function create()
    {
        return view('admin.hero.form');
    }


    public function store(HeroRequest $request)
    {
        $data = $request->validated();
        if ($request->has('image')){
            $name = \Illuminate\Support\Str::uuid()->toString(). '.'.$request->image->extension();
            $request->image->storeAs('public', $name);
            $data['image'] = $name;
        }
        Hero::create($data);
        return redirect()->route('hero.index');
    }

    public function edit(Hero $hero)
    {
        return view('admin.hero.form', compact('hero'));
    }

    public function update(HeroRequest $request, Hero $hero)
    {
        $data = $request->validated();
        if ($request->has('image')){
            $name = \Illuminate\Support\Str::uuid()->toString(). '.'.$request->image->extension();
            $request->image->storeAs('public', $name);
            $data['image'] = $name;
            Storage::disk('public')->delete($hero->image);
        }
        $hero->update($data);
        return redirect()->back();
    }


    public function destroy(Hero $hero)
    {
        Storage::disk('public')->delete($hero->image);
        $hero->delete();
        return redirect()->back();
    }
}

