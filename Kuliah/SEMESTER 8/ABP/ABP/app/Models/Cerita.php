<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'category_id',
        'cover',
        'poster',
        'penulis',
        'cerita',
        'is_published',
        'time_published',
        'like',
        'dislike',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
