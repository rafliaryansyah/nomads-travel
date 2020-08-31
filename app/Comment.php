<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'travel_packages_id', 'user_id', 'comment'
    ];

    protected $guarded = [];

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
