<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nyaman extends Model
{
    protected $fillable = [
        'title',
        'filename',
        'id_user'
    ];
}
