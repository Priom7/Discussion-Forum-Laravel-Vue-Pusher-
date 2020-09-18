<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // protected $fillable = ['name', 'slug'];
    protected $guarded = [];
}
