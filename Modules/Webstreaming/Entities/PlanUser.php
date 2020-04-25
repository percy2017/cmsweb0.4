<?php

namespace Modules\Webstreaming\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanUser extends Model
{
    use SoftDeletes;
    protected $table = 'hs_plan_user';
    protected $fillable = ['hs_plan_id', 'user_id', 'start', 'finish', 'status'];
}
