<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_Teachers extends Model
{
    use HasFactory;

    public function Teacher()
    {
        return $this->belongsTo("App\Models\Teachers");
    }

        public function Course()
    {
        return $this->belongsTo("App\Models\Courses");
    }
}
