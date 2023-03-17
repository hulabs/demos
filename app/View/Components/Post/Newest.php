<?php

namespace App\View\Components\Post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Newest extends Component
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
        $posts = collect([
            ["title" => "Beitrag 1", "id" => 1],
            ["title" => "Beitrag 2", "id" => 2],
            ["title" => "Beitrag 3", "id" => 3],
            ["title" => "Beitrag 4", "id" => 4],
            ["title" => "Beitrag 5", "id" => 5],
        ]);
        return view('components.post.newest', compact('posts'));
    }
}
