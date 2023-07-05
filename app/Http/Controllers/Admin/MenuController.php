<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\HeroRequest;
use App\Http\Requests\MenuRequest;
use App\Models\Blog;
use App\Models\Hero;
use App\Models\Menu;
use App\View\Components\Men;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $models = Menu::all();
        return view('admin.menu.index',compact('models'));
    }

    public function create()
    {
        return view('admin.menu.form');
    }


    public function store(MenuRequest $request)
    {
        $data = $request->validated();
        Menu::create($data);
        return redirect()->route('menu.index');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menu.form', compact('menu'));
    }

    public function update(MenuRequest $request, Menu $menu)
    {
        $data = $request->validated();
        $menu->update($data);
        return redirect()->back();
    }


    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->back();
    }
}

