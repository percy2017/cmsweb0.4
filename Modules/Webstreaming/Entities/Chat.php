<?php

namespace Modules\Webstreaming\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
    use SoftDeletes;
    protected $table = 'hs_chats';
    protected $fillable = ['message','message_type','transmitter','receiver','file','hs_meeting_id'];
}
