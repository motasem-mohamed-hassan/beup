<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_en', 'name_ar', 'description_en', 'description_ar', 'created_at', 'updated_at'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
