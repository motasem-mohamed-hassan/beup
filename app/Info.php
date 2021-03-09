<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'phone', 'email', 'location_en', 'location_ar', 'whatsapp_link'
    ];
}
