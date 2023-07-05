<?php

namespace App\Services;

use App\Models\Translation;
use App\Repositories\TranslationRepository;
use Illuminate\Support\Facades\Cache;
use Psy\Util\Str;

class TranslationService
{
    public function __construct(protected TranslationRepository $repository)
    {

    }

    public function index()
    {
        return $this->repository->paginate(10);
    }

    public function store($request)
    {
        $data = $request->all();
        $data['key'] = \Illuminate\Support\Str::slug($data['key'], '_');
        $model = $this->repository->save($data,new Translation());
        self::clearCache();
        return $model;
    }

    public function update($request, $model)
    {
        $data = $request->all();
        $data['key'] = \Illuminate\Support\Str::slug($data['key'], '_');
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
        Cache::forget('translations');
    }

    public function cachedTranslations()
    {
        return  Cache::rememberForever('translations', function () {
            return \App\Models\Translation::pluck('value', 'key')->toArray();
        });
    }


}
