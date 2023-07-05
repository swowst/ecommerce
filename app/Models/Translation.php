<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @method static pluck(string $string, string $string1)
 */
class Translation extends Model
{
    use HasTranslations;
    protected $table = 'translations';
    protected $guarded = [];
    public array $translatable = ['value'];



}
