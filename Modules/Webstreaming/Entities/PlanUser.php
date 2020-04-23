<?php

namespace Modules\Webstreaming\Entities;

use Illuminate\Database\Eloquent\Model;

class PlanUser extends Model
{
    protected $table = 'hs_plan_user';
    protected $fillable = ['hs_plan_type_id', 'user_id', 'start', 'finish', 'status'];
}
