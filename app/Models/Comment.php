<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;   

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'post_id',
    ];

    /**
     * Get the post that owns the Comment
     * @return BelongsTo 
     */
    public function post() : BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Get the user that owns the Comment
     * @return BelongsTo 
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
