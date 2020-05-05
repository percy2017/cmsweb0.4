<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BgProductOffice extends Model
{
    use SoftDeletes;
    protected $table = 'bg_product_offices';
    protected $fillable = ['stock', 'product_id', 'office_id'];
}
