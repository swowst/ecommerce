<?php

namespace App\Services;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Translation;
use App\Repositories\AttributeRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\TranslationRepository;
use Illuminate\Support\Facades\Cache;
use Psy\Util\Str;


class AttributeService
{
    public function __construct(protected AttributeRepository $repository)
    {

    }

    public function index()
    {
        return $this->repository->paginate(10);
    }

    public function store($request)
    {
        $data = $request->all();
        $model = $this->repository->save($data,new Attribute());
        self::clearCache();
        return $model;
    }

    public function update($request, $model)
    {
        $data = $request->all();
        $model = $this->repository->save($data,$model );
        self::clearCache();
        return $model;
    }

    public function delete($model)
    {
        self::clearCache();
        return $this->repository->delete($model);

    }

    public static function clearCache ()
    {
        Cache::forget('attributes');
    }


    public function cachedAttributes(){
        return Cache::rememberForever('attributes', fn() => $this->repository->all());
    }

}
