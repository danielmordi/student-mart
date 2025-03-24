<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'comment',
        'rating',
        'user_id',
        'item_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
