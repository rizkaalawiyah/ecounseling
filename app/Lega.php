<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lega extends Model
{
    protected $fillable = [
        'title',
        'filename',
        'id_user'
    ];
}
