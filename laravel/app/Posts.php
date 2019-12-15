<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'description',
        'picture_id',
        'category_id',
        'keyProduct',
        'price',
        'soldes',
        'visibility',
        'sizes'
    ];

    public function picture() {
        return $this->belongsTo(Picture::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
