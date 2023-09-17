<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Epizoda extends Component
{
    public function __construct(
        public string $thumbnail,
        public string $slug,
        public string $title,
        public string $number,
        public string $duration,
        public string $src,
    )
    { }

    public function render(): View|Closure|string
    {
        return view('components.epizoda');
    }
}
