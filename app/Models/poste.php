<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class poste extends Model
    {
        use HasFactory;
    
        protected $fillable = [
            'id',
            'wilaya_id',
            'common_id',
        ];

        public function wilaya(){
            return $this->belongsTo(wilaya::class, 'wilaya_id');
        }

        public function common(){
            return $this->belongsTo(commune::class, 'common_id');
        }
}
