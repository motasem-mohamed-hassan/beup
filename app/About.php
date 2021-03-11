<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'id', 'video', 'head_title_en', 'head_title_ar', 'head_description_en', 'head_description_ar'
        , 'body_title_1_en', 'body_title_1_ar', 'body_description_1_en', 'body_description_1_ar'
        , 'body_title_2_en', 'body_title_2_ar', 'body_description_2_en', 'body_description_2_ar'
        , 'body_title_3_en', 'body_title_3_ar', 'body_description_3_en', 'body_description_3_ar'
    ];

}
