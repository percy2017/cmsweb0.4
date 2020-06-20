<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgLocation extends Model
{
    use SoftDeletes;
    protected $table = 'bg_locations';
    protected $fillable = ['type', 'default', 'address', 'latitud', 'longitud', 'region_id', 'customer_id'];

    public function region(){
        return $this->belongsTo('Modules\Bimgo\Entities\BgRegion', 'region_id');
    }
}
