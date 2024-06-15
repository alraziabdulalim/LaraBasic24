<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        // 'url',
        'content',
        'category_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags():BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function readstatuses():BelongsTo
    {
        return $this->belongsTo(ReadStatus::class);
    }

    public function topic_comments(): HasMany
    {
        return $this->hasMany(TopicComment::class);
    }
}
