<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'post_departure_id',
        'Product_count',
        'delivery_type',
        'wilaya_arrived',
        'common_arrived',
        'delivery_price',
        'client_name',
        'client_lastname',
        'client_email',
        'client_address',
        'phone_number_01',
        'phone_number_02',
        'observation',
        'total_price',
        'user_id',
        'post_arrived_id',
        'flag',
        'final_state'
    ];

    public function post_departure(){
        return $this->belongsTo(poste::class, 'post_departure_id');
}

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
}

    public function post_arrived(){
        return $this->belongsTo(poste::class, 'post_arrived_id');
}
    
}
