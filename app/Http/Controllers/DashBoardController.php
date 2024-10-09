<?php

namespace App\Http\Controllers;

use App\Enums\TaskStatus;
use App\Models\Task;
use Illuminate\View\View;

class DashBoardController extends Controller
{
    public function __invoke(): View
    {
        $completedTasksPerDay = Task::where('status', TaskStatus::Completed->value)
            ->where('assigned_to', auth()->id())
            ->whereBetween('created_at', [now()->subDays(7), now()])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date');

        $todayCount = $completedTasksPerDay->get(now()->format('Y-m-d'), 0);
        $yesterdayCount = $completedTasksPerDay->get(now()->yesterday()->format('Y-m-d'), 0);

        $percentageChange = $yesterdayCount ? (($todayCount - $yesterdayCount) / $yesterdayCount) * 100 : 0;

        return view('pages.dashboard', [
            'completedTasksPerDay' => $completedTasksPerDay,
            'percentageChange' => $percentageChange,
            'todayCount' => $todayCount,
        ]);

    }
}
