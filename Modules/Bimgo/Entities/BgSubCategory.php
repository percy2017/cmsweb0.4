<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BgSubCategory extends Model
{
    use SoftDeletes;
    protected $table = 'bg_sub_categories';
    protected $fillable = ['title', 'description', 'category_id', 'block'];

    public function products(){
        return $this->hasMany('Modules\Bimgo\Entities\BgProduct', 'sub_category_id');
    }

    public function category(){
        return $this->belongsTo('Module\Bimgo\Entities\BgCategory', 'category_id');
    }
}
