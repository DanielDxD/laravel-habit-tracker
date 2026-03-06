<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function dashboard(\Illuminate\Http\Request $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();
        $habits = $user->habits;

        return view('dashboard', compact('habits'));
    }
}
