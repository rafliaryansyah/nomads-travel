<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'transactions_id', 'username', 'nationaility', 'is_visa', 'doe_passport'
    ];

    protected $hidden = [

    ];

    public function transaction()
    {
        return $this->hasMany( Transaction::class, 'transactions_id', 'id' );
    }


}
    