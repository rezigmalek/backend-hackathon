<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pivot extends Model
    {
        use HasFactory;
    
        protected $fillable = [
            'id',
            'post_id',
            'wilaya_id',
            'stopdesk_price',
            'at_home_price',
        ];

        public function wilaya(){
            return $this->belongsTo(wilaya::class, 'wilaya_id');
        }

        public function post(){
            return $this->belongsTo(poste::class, 'post_id');
        }
}