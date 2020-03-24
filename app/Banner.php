<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $table = 'tbl_banner';
    public $timestamps = false;
    protected $fillable = [

        'contentID',
        'contentName',
        'bannerType',
        'active',
        'position',
        'filename',
        'url',
        'isLive'




    ];

    protected $guarded = [];

}
