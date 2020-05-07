<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BgSubCategory extends Model
{
    use SoftDeletes;
    protected $table = 'bg_sub_categories';
    protected $fillable = ['title', 'description', 'category_id'];
}