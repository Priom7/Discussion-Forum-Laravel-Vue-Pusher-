<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //


    public function getRouteKeyName()
    {

        return 'slug';
    }

    // protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];
    protected $guarded = [];

    public function getPathAttribute()
    {
        return asset("api/post/$this->slug");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
