<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produit extends Model
    {
        use HasFactory;
    
        protected $fillable = [
            'id',
            'name',
            'order_id',
            'price'
        ];

        public function order(){
            return $this->belongsTo(commande::class, 'order_id');
        }
}
