<?php

namespace App\Http\Controllers;

use App\Enams\BasketType;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Hero;
use App\Models\Menu;
use App\Services\BasketService;
use App\Services\CategoryService;
use App\Services\ProductService;
use App\View\Components\Men;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function __construct(protected BasketService $basketService, protected ProductService $productService)
    {
    }


    public function homePage(CategoryService $categoryService)
    {
        $blogs = Blog::limit(3)->get();
        $heros = Hero::all();
        $basket = $this->basketService->getCard(BasketType::BASKET);
        $categories = $categoryService->cachedCategories();
        return view('welcome', compact('categories', 'blogs','heros','basket'));
    }
    public function category($slug, CategoryService $categoryService,  ProductService $productService)
    {

        $categories = $categoryService->cachedCategories();
        $basket = $this->basketService->getCard(BasketType::BASKET);
        return view('category', compact('categories', 'basket'));
    }

    public function detail(ProductService $productService, $id)
    {
        $allProducts = $productService->getLimitedItems(4);
        $basket = $this->basketService->getCard(BasketType::BASKET);
        $product = $productService->cachedProducts()->where('id', $id)->first();
        return view('detail', compact('product', 'allProducts', 'basket'));
    }

    public function shop(ProductService $productService){

        $filterIds = [];
        if (\request()->filled('attr')){
            $filterIds = explode(',',\request()->attr[0]);
        }
        $category = Category::with([ 'attributes.values' ])->first();
        $products = $productService->cachedProducts();
        $productsAttr = $productService->getProductsByIds($filterIds);
        $basket = $this->basketService->getCard(BasketType::BASKET);
        return view('shop', compact('products', 'category', 'productsAttr', 'basket'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::all()->where('id', $id)->first();
        $basket = $this->basketService->getCard(BasketType::BASKET);
        return view('blog-detail', compact('blog', 'basket'));
    }

    public function contact()
    {
        $basket = $this->basketService->getCard(BasketType::BASKET);
        return view('contact', compact('basket'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        $basket = $this->basketService->getCard(BasketType::BASKET);
        return view('blog', compact('blogs', 'basket'));
    }

    public function categoryView()
    {
        $basket = $this->basketService->getCard(BasketType::BASKET);
        $products = $this->productService->cachedProducts()->where('category_id',4);
        return view('category-view', compact('basket', 'products'));
    }

    public function categoryViewWomen()
    {
        $basket = $this->basketService->getCard(BasketType::BASKET);
        $products = $this->productService->cachedProducts()->where('category_id',5);
        return view('women-category', compact('basket', 'products'));
    }


}
