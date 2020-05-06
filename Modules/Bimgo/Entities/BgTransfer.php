<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BgTransfer extends Model
{
    use SoftDeletes;
    protected $table = 'bg_transfers';
    protected $fillable = ['status', 'description', 'user_id'];
}
