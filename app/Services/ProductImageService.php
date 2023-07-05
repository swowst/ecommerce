<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Translation;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductImageRepository;
use App\Repositories\ProductRepository;
use App\Repositories\TranslationRepository;
use Illuminate\Support\Facades\Cache;
use Psy\Util\Str;


class ProductImageService
{
    public function __construct(protected ProductImageRepository $repository, protected FileUploadService $fileUploadService)
    {

    }

    public function index($productId)
    {
        return $this->repository->query()->where('product_id', $productId)->orderBy('sort_order','asc')->get();
    }

    public function store($request)
    {
        $data = $request->all();
        $data['image'] = $this->fileUploadService->uploadFile($request->image, 'product_images');
        $model = $this->repository->save($data,new ProductImage());
        self::clearCache();
        return $model;
    }

    public function update($request, $model)
    {
        $data = $request->all();
        $data['image'] = $this->fileUploadService->replaceFile($request->image, $model->image, 'products_image');

        $model = $this->repository->save($data,$model );
        self::clearCache();
        return $model;
    }

    public function delete($model)
    {
        self::clearCache();
        $this->fileUploadService->removeFile($model->image);
        return $this->repository->delete($model);

    }

    public function sortElements($sortOrders)
    {
        foreach ($sortOrders['order'] as $sort_order => $productImageId){
           $this->repository->query()->where('id', $productImageId)->update(['sort_order'=> $sort_order] );
        }
    }

    public static function clearCache ()
    {
        Cache::forget('products_images');
    }




}
