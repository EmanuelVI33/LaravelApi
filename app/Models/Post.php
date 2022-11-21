<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'user_id'
    ];

    public function getExcerptAttribute() 
    {
        return substr($this->content, 0, 120);
    }

    public function getPublishedAttribute()
    {   
        return $this->created_at->diffForHumans();
    }

    public function user() 
    {
        return $this->belongsTo(User::class); // Un Post le corresponde a un User
    }
}
