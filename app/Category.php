<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'tbl_category';
    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'status',
        'position'





    ];
}
