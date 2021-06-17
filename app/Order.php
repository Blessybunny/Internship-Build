<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    //Fillable by the forms
    protected $fillable = [
        'email',
        'delivery_method',
        'payment_method',
        
        'name',
        'address',
        'postal_code',
        'city',
        'region',
        'country',
            
        'pickup_location',
        'apparel_id',
        'apparel_quantity',
        'apparel_size'
    ];
}
