<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_de_curso',
        'day',
        'area_id',
        'training_centers_id'
    ];

    public function area()
    {
        return $this->belongsTo(Areas::class, 'area_id');
    }

    public function Teachers()
    {
        return $this->belongsToMany(Teachers::class);
    }

    public function Apprentices()
    {
        return $this->belongsToMany(Apprentices::class);
    }

    public function training_center()
    {
        return $this->belongsTo(TrainingCenters::class, 'training_centers_id');
    }
}