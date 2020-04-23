<?php

namespace Modules\Webstreaming\Entities;

use Illuminate\Database\Eloquent\Model;

class PlanType extends Model
{
    protected $table = 'hs_plan_types';
    protected $fillable = ['name', 'max_persons', 'max_time', 'price'];
}
