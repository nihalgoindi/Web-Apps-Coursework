<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    /**
     * Get the user the the account belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the posts that belong to the account.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * An account can like many things (Posts or Comments)
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * An account can like comment on things 
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}


