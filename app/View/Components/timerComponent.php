<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TimerComponent extends Component
{
    public $minutes;
    public $seconds;

    public function __construct($minutes = 0, $seconds = 0)
    {
        $this->minutes = $minutes;
        $this->seconds = $seconds;
    }

    public function render()
    {
        return view('components.timer-component');
    }
}
