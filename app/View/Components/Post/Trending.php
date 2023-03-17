<?php

namespace App\View\Components\Post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Trending extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $trendings = collect([
            ["title" => "Trending Story 1", "id" => 1],
            ["title" => "Trending Story 2", "id" => 2],
            ["title" => "Trending Story 3", "id" => 3],
            ["title" => "Trending Story 4", "id" => 4],
            ["title" => "Trending Story 5", "id" => 5],
        ]);
        return view('components.post.trending', compact('trendings'));
    }
}
