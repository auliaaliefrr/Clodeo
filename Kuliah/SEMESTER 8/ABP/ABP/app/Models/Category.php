<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function cerita()
    {
        return $this->hasMany(User::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
