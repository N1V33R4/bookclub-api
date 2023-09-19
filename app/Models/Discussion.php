<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}