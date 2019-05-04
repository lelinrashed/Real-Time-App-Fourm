<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Model fillable property
     * @var array
     */
    protected $fillable = ['name', 'slug'];

    /**
     * Get single category with slug
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
