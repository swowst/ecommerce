<?php

namespace App\Http\Controllers;

use App\Enams\BasketType;
use App\Http\Requests\BasketRequest;
use App\Services\BasketService;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function __construct(protected BasketService $basketService)
    {
    }

    public function basket()
    {
        $basket = $this->basketService->getCard(BasketType::BASKET);
        return view('cart', compact('basket'));

    }



    public function addToBasket(BasketRequest $basketRequest)
    {
        $this->basketService->addToBasket(BasketType::BASKET,$basketRequest);
    }

    public function deleteFromBasket($id)
    {
        $this->basketService->deleteFromBasket(BasketType::BASKET,$id);
        return redirect()->back();
    }
}
