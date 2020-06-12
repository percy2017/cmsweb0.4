<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BgRegion extends Model
{
    use SoftDeletes;
    protected $table = 'bg_regions';
    protected $fillable = ['name', 'description', 'image'];
}
