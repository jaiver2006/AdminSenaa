<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCenters extends Model
{
    
    use HasFactory;
        protected $fillable = [
        'name',
        'location'
    ];

    public function teachers()
    {
        return $this->hasMany("App\Models\Teachers");
    }

    public function Courses()
    {
        return $this->hasMany("App\Models\Courses");
    }
}
