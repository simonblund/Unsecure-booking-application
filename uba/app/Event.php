<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\participants;

class Event extends Model
{
    protected $table = 'events';
    
    protected $fillable = ['EName', 'ELocation', 'EStartDate', 'EStopDate', 'EStartTime', 'EStopTime', 'EMaxParticipants', 'ECountParticipants', 'EDescription'];

    public function visitors()
    {
        return $this->belongsToMany('App\User', 'participantrecords')->withTimestamps();
    }
}
