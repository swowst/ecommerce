<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class CategoryTranslation extends Model
{
    protected $table = 'category_translations';
    public $timestamps = false;
    protected $guarded = [];
}
