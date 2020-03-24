<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $table = 'ceim_users';
    public $timestamps = false;
    /*protected $fillable = [






    ];*/

    protected $guarded = [];
}
