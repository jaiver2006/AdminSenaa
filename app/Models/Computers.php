<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    use HasFactory;
        protected $fillable = [
        'number',
        'brand',
        'imagen_url',
        'imagen_public_id',
    ];
        public function Apprentice()
    {
        return $this->hasOne("App\Models\Apprentices");
    }
}
