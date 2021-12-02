<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    /**
     * Get the account that gave a like.
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the post that was liked.
     */
    public function post()
    {
        return $this->belongsTo(Post:class);
    }

    }
}
