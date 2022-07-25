<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;
use App\Models\student;
class enrollment extends Model
{
    use HasFactory;
    // course
    public function course(){

        return $this->belongsTo(course::class);
    
    }
    public function student(){

        return $this->belongsTo(student::class);
    
    }
    // badge
    public function badge(){

        return $this->belongsTo(badge::class);

    }
}
