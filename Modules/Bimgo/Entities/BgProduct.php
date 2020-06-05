<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgProduct extends Model
{
    use SoftDeletes;
    protected $table = 'bg_products';
    protected $fillable = ['code', 'name', 'slug', 'description', 'sub_category_id', 'images', 'tags', 'user_id', 'description_long', 'characteristics'];

    public function product_details(){
        return $this->hasMany('Modules\Bimgo\Entities\BgProductDetail', 'product_id');
    }
}
