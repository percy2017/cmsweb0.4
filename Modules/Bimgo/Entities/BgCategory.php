<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BgCategory extends Model
{
    use SoftDeletes;
    protected $table = 'bg_categories';
    protected $fillable = ['title','slug','image','description'];
}
