<?php

namespace Modules\Webstreaming\Entities;

use Illuminate\Database\Eloquent\Model;

class MeetingParticipant extends Model
{
    protected $table = 'hs_meeting_participant';
    protected $fillable = ['hs_meeting_id', 'hs_participant_id', 'join', 'exit'];
}
