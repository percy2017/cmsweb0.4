<?php

namespace Modules\Inti\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class IntiTrainer extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'inti_trainers';
    protected $fillable = ['full_name', 'slug', 'photo', 'user_id', 'phone', 'profession', 'curriculum_vitae', 'user_id'];
}
