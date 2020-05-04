<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgProduct extends Model
{
    use SoftDeletes;
    protected $table = 'bg_products';
    protected $fillable = ['name', 'slug', 'description', 'sub_category_id', 'images', 'price', 'stock', 'user_id'];
}
