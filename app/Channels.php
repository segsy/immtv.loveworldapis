<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
    public $table = 'channels';
    protected $fillable = [
        'channel',
        'category',
        'description',
        'tags',
        'filename',
        'url',
        'featured',
        'active',
        'position',
        'hidden',
        'channelType',
        'userID'




    ];

}
