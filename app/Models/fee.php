<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\instalment;
use App\Models\student;
use App\Models\badge;
use App\Models\course;
use App\Models\enrollment;
class fee extends Model
{
    use HasFactory;
    public function instalments(){
        return $this->hasMany(instalment::class);

    }

    public function student(){
        return $this->belongsTo('App\Models\student','student_id');
    }
    public function badge(){
        return $this->belongsTo(badge::class);
    }
    public function course(){
        return $this->belongsTo(course::class);
    }
    public function enrollment(){

        return $this->belongsTo(enrollment::class);
    }
}
