<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashBoardController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.dashboard');
    }
}
