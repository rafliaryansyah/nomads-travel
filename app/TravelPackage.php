<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{

    use SoftDeletes;
    
    protected $fillable = [
        'title', 'slug', 'location_category_id', 'about', 'featured_event',
        'language', 'foods', 'depatured_date', 'duration',
        'type', 'price'
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class, 'travel_packages_id', 'id');
    }

    protected $hidden = [

    ];

    public function packages()
    {
        return $this->belongsTo( TravelPackage::class, 'id', 'travel_packages_id' );
    }   


    public function details()
    {
        return $this->hasMany( TransactionDetail::class, 'transactions_id', 'id' );
    }

    public function galleries()
    {
        return $this->hasMany( Gallery::class, 'travel_packages_id', 'id' );
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'location_category_id', 'id');
    }

    

    

}
