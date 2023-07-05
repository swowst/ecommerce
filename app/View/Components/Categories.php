<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Services\CategoryService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categories extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected CategoryService $categoryService)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = $this->categoryService->cachedCategories();
        $menus = Menu::all();
        return view('components.categories', compact('categories', 'menus'));
    }
}
