<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DogsImg extends Model
{
    protected $table = 'dogs_img';

    protected $fillable = [
        'path', 'dog_id'
    ];
}
