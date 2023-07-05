<?php

namespace App\Repositories;


use App\Models\Product;
use App\Models\ProductImage;

class ProductImageRepository extends AbstractRepositorie
{
    protected $modelClass = ProductImage::class;
}
