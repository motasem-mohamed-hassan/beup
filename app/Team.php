<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name_ar', 'name_en', 'image', 'created_at', 'updated_at'
    ];
}
