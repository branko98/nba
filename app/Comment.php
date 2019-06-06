<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const STORE_RULES = [
        'content' => 'required|min:10',
    ];

    protected $fillable = [
        'content',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
