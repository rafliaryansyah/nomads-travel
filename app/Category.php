<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    // use SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'name', 'slug'
    ];

    public function travel_package()
    {
        return $this->hasMany('App\TravelPackage');
    }
    
}
