<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * fillable proparty request from client
     * @var array
     */
    protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];

    /**
     * Show single question with slug
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Any question belongs to an user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Every single question has many replies from different users
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    /**
     * Every single question belongs to a category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the slug full path
     * @return string
     */
    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}
