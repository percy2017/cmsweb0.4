<?php

namespace Modules\Webstreaming\Entities;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'hs_participants';
    protected $fillable = ['name', 'email', 'phone', 'city'];
}
