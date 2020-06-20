<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BgLoyalty extends Model
{
    use SoftDeletes;
    protected $table = 'bg_loyalties';
    protected $fillable = ['name', 'type', 'target', 'value', 'attributes', 'order'];
}
