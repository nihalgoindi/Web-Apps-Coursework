<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    /**
     * Get the posts that have this topic.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
