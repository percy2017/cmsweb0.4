<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class BgCustomer extends Model
{
    use SoftDeletes;
    protected $table = 'bg_customers';
    protected $fillable = ['name_bussiness', 'nit_ci', 'phone', 'banner','type','adress', 'user_id'];

    public function user(){
        // return $this->hasOne(User::class);
        return $this->belongsTo(User::class,'user_id');
    }
}
