<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class LayoutsMainAdmin extends Component
{
    public function render(): View
    {
        return view('components.layouts.main-admin');
    }
}
