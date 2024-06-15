<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'type',
        'category_id',
        'pub_status',
        'com_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ownerBy(User $user)
    {
        return $user->id === $this->user_id;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
