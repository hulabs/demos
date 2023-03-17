<?php

namespace App\View\Components\Post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categories extends Component
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
        $categories = collect([
            ["title" => "Kategorie 1", "id" => 1],
            ["title" => "Kategorie 2", "id" => 2],
            ["title" => "Kategorie 3", "id" => 3],
            ["title" => "Kategorie 4", "id" => 4],
            ["title" => "Kategorie 5", "id" => 5],
        ]);
        return view('components.post.categories', compact('categories'));
    }
}
