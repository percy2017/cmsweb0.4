<?php

namespace Modules\Webstreaming\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use SoftDeletes;
    protected $table = 'hs_plans';
    protected $fillable = ['name','max_person','max_time','price'];
}
