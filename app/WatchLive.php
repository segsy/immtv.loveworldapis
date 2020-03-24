<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WatchLive extends Model
{
    //
    public $table = 'tbl_watchlive';
    protected $fillable = [
        'streamID',
        'eventName',
        'eventID',
        'description',
        'stream_url',
        'status',
        'streamerURL',
        'bbURL',
        'token'




    ];

}
