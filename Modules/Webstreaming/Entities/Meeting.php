<?php

namespace Modules\Webstreaming\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Meeting extends Model
{
    use Sluggable;

    protected $table = 'hs_meetings';
    protected $fillable = ['name', 'slug', 'user_id','start','finish','meeting_types','create_date'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
