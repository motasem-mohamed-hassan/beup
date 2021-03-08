<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title_en', 'title_ar','body_en','body_en','body_ar', 'image', 'created_at', 'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
