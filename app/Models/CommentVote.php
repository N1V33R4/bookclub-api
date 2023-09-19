<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CommentVote extends Pivot
{
    use HasFactory;

    protected $fillable = [
        "score"
    ];

    public function comment()
    {
        return $this->belongsTo(comment::class);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
