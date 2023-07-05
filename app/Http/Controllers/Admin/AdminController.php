<?php

namespace App\Http\Controllers\Admin;

use App\Enams\Guards;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.home');
    }

    public function loginView(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.login');
    }

    public function login(): \Illuminate\Http\RedirectResponse
    {
        if (auth()->guard(Guards::ADMIN->value)->attempt(['email' => \request()->email, 'password' => \request()->password], \request()->remember_me)){
            return redirect()->route('admin.home');
        }

        return redirect()->back();
    }

    public function logout()
    {
        if (auth()->guard(Guards::ADMIN->value)->check()){
            auth()->guard(Guards::ADMIN->value)->logout();
        }

        return redirect()->route('admin.login');
    }
}
