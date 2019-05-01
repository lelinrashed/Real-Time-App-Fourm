<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    /**
     * Every replay belongs to a single question
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    /**
     * Every replay belongs to a User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Every replay has many like
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
