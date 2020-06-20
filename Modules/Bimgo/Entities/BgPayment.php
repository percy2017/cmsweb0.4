<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgPayment extends Model
{
    use SoftDeletes;
    protected $table = 'bg_payments';
    protected $fillable = ['name', 'description', 'details', 'image'];
}
