<?php

namespace App\View\Components;

use App\Services\CategoryService;
use App\Services\ProductService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Women extends Component
{
    public function __construct(protected $title, protected ProductService $productService, protected CategoryService $categoryService)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = $this->productService->cachedProducts()->where('category_id',5);
        return view('components.women', compact('products'));
    }
}
