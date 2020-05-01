<?php

namespace Modules\Webstreaming\Entities;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $table = 'hs_meetings';

    protected $fillable = [
        'name',
        'slug',
        'user_id',
        'start',
        'finish',
        'meeting_types',
        'day',
        'link',
        'descriptions'
    ];
}
