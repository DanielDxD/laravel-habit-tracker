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

    public function show(\App\Models\Habit $habit, \Illuminate\Http\Request $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();

        abort_if($habit->user_id !== $user->id, 403, 'Acesso não autorizado');

        $endDate = \Carbon\Carbon::now()->endOfDay();
        $startDate = $endDate->copy()->subDays(364)->startOfDay();

        $logs = $habit->habitLogs()
            ->whereBetween('completed_at', [$startDate, $endDate])
            ->get()
            ->groupBy(fn ($log) => \Carbon\Carbon::parse($log->completed_at)->format('Y-m-d'));

        $heatmapData = [];
        for ($i = 0; $i <= 364; $i++) {
            $dateCursor = $startDate->copy()->addDays($i);
            $dateStr = $dateCursor->format('Y-m-d');

            $heatmapData[$dateStr] = [
                'date' => $dateCursor->copy(),
                'done' => $logs->has($dateStr),
                'count' => $logs->has($dateStr) ? $logs->get($dateStr)->count() : 0,
            ];
        }

        return view('habits.show', compact('habit', 'heatmapData'));
    }
}
