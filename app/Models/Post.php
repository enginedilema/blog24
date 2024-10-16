<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];
    
    /**
     * Get the user that owns the Post
     * @return BelongsTo
     */
    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the comments for the Post
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
