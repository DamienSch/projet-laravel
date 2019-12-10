<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function picture() {
        return $this->belongsTo(Picture::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
