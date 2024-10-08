<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ["name", "image", "location"];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
