<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Get the account that this post belongs to.
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the topic that this post belongs to.
     */
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    /**
     * Get the comments that belong to the post.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the likes that belong to the post.
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}

