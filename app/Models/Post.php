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


}
