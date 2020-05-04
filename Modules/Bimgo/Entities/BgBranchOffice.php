<?php

namespace Modules\Bimgo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BgBranchOffice extends Model
{
    use SoftDeletes;
    protected $table = 'bg_branch_offices';
    protected $fillable = ['name', 'description', 'adress', 'phone', 'map'];
}
