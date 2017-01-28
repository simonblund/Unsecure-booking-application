<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    
    protected $fillable = ['EName', 'ELocation', 'EStartDate', 'EStopDate', 'EStartTime', 'EStopTime', 'EMaxParticipants', 'ECountParticipants', 'EDescription'];
}
