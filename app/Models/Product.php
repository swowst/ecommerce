<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model implements TranslatableContract
{
    use Translatable;
    public $translationModel = ProductTranslation::class;
    protected $table = 'products';
    protected $guarded = [];
    public $translatedAttributes = ['title', 'slug','description','specs'];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function images() : HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function attributeValues() : BelongsToMany
    {
        return $this->belongsToMany(AttributeValue::class, AttributeValueProduct::class,'product_id','attribute_value_id');
    }

}
