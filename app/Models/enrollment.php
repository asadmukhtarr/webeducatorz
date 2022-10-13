<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;
use App\Models\student;
use App\Models\badge;
class enrollment extends Model
{
    protected $table = "enrollments";
    use HasFactory;

    // course
    public function course(){

        return $this->belongsTo(course::class);
    
    }
    
    public function badge(){

        return $this->belongsTo(badge::class);
    
    }

    public function student(){

        return $this->belongsTo(student::class);
    
    }
    // // badge
    // public function badge(){

    //     return $this->belongsToMany(badge::class);

    // }
}
