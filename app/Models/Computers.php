<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    use HasFactory;
        protected $fillable = [
        'number',
        'brand'
    ];
        public function Apprentice()
    {
        return $this->hasOne("App\Models\Apprentices");
    }
}
