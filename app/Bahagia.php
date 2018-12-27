<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahagia extends Model
{
    protected $fillable = [
        'title',
        'filename',
        'id_user'
    ];
}
