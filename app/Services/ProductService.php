<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\Translation;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\TranslationRepository;
use Illuminate\Support\Facades\Cache;
use Psy\Util\Str;


class ProductService
{
    public function __construct(protected ProductRepository $repository, protected FileUploadService $fileUploadService)
    {

    }

    public function index()
    {
        return $this->repository->paginate(10,['category.translations']);
    }

    public function store($request)
    {
        $data = $request->all();
        $attributes = collect($data['attributes'] ?? [])->flatten()->toArray();
        $data['image'] = $this->fileUploadService->uploadFile($request->image, 'products');
        unset($data['attributes']);
        $data['qty'] = $data['qty'] ?? 0;
        $model = $this->repository->save($data,new Product());
        $model->attributeValues()->sync($attributes);
        self::clearCache();
        return $model;
    }

    public function update($request, $model)
    {
        $data = $request->all();
        $attributes = collect($data['attributes'] ?? [] )->flatten()->toArray();
        if ($request->has('image')){
            $data['image'] = $this->fileUploadService->replaceFile($request->image, $model->image, 'products');
        }
        $data['qty'] = $data['qty'] ?? 0;
        $model->attributeValues()->sync($attributes);
        unset($data['attributes']);

        $model = $this->repository->save($data,$model );

        self::clearCache();
        return $model;
    }

    public function delete($model)
    {
        foreach ($model->images as $productImage) {
            $this->fileUploadService->removeFile($productImage->image);
        }
        self::clearCache();
        $this->fileUploadService->removeFile($model->image);
        return $this->repository->delete($model);

    }

    public static function clearCache ()
    {
        Cache::forget('products');
    }

    public function getProductsByTypes($productType, $limit = 10)
    {

        return $this->repository->query()->with(['category.translations', 'translations'])->whereHas('types', function ($q) use ($productType){
                return $q->where('type', $productType);
        })->limit($limit)->get();
    }



//    public function getProductsByCategoryIds($categoryIds)
//    {
//        return $this->repository->query()->whereIn('category_id', $categoryIds)->with(['translations','category.translations'])->paginate(40);
//    }

    public function cachedProducts(){
        return Cache::rememberForever('products', fn() => $this->repository->all(with:['translations','category.translations']));
    }

    public function getLimitedItems($limit = 2)
    {
        return Product::limit($limit)->get();
    }

    public function getProductsByIds( $filterIds = [])
    {
        return $this
            ->repository
            ->query()
            ->when(count($filterIds), function ($q) use($filterIds){
            return $q->whereHas('attributeValues', function ($subQ) use ($filterIds){
                return $subQ->whereIn('attribute_value_id', $filterIds);
            });
        })->with(['attributeValues'])->paginate (48);
    }

    public function getProductForBasket($productId)
    {
        return $this->repository->query()->where('id', $productId)->first();
    }


}
