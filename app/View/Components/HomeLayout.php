<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class HomeLayout extends Component
{
    public function render(): View
    {
        return view('layouts.home');
    }
}
