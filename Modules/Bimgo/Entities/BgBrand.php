<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BgBrand extends Model
{
    use SoftDeletes;
    protected $table = 'bg_brands';
    protected $fillable = ['name', 'description', 'slug', 'image'];
}
