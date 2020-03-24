<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $table = 'video_tbl';
    protected $fillable = [
        'channel_id',
        'videos_title',
        'uploadtime',
        'ios_url',
        'windowsurl',
        'rawUrl',
        'description',
        'recommended',
        'active',
        'isLive',
        'position',
        'hideFrom',
        'isDownloadable',
        'email',
        'isPublic',
        'thumbnail'





    ];

}
