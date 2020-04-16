<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Module extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'modules';
    protected $fillable = ['installed','name','description_short','image','description_long'];
}
