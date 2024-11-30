<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commune extends Model
    {
        use HasFactory;
    
        protected $fillable = [
            'id',
            'name',
            'wilaya_id'
        ];

        public function wilaya(){
            return $this->belongsTo(wilaya::class, 'wilaya_id');
        }
}
