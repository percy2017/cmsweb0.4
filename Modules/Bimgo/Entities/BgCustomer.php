<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgCustomer extends Model
{
    use SoftDeletes;
    protected $table = 'bg_customers';
    protected $fillable = ['name', 'nit', 'phone', 'adress', 'user_id'];
}
