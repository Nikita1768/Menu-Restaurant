<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class CategorySelect extends Component
{

    public Collection $categories;

    /**
     * Create a new component instance.
     */
    public function __construct(int|null $currentCategory = null)
    {
        $this->categories = Category::all();
        $this->currentCategory = $currentCategory;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select.category-select');
    }
}
