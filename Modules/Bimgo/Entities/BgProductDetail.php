<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Laravelista\Comments\Commentable;
class BgProductDetail extends Model
{
    use SoftDeletes;
    //use Commentable;
    protected $table = 'bg_product_details';

    protected $fillable = ['type', 'code', 'title', 'price', 'price_last', 'stock', 'product_id', 'published'];

}
