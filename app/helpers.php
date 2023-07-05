<?php

use App\Repositories\TranslationRepository;
use App\Services\TranslationService;

function t($key){
  $translationService = new TranslationService(new TranslationRepository());
  $translations = $translationService->cachedTranslations();

  return $translations[$key] ?? $key;

}
