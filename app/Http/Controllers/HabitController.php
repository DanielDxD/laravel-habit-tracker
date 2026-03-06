<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitRequest;

class HabitController extends Controller
{
    public function create()
    {
        return view('habits.create');
    }

    public function store(StoreHabitRequest $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();

        $user->habits()->create($request->validated());

        return redirect()->route('auth.dashboard')->with('success', 'Hábito criado com sucesso!');
    }
}
