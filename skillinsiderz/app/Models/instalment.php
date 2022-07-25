<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\fee;
use App\Models\student;
use App\Models\course;

class instalment extends Model
{
    use HasFactory;

    public function fee(){
        return $this->belongsTo(fee::class);
    }
    public function student(){

        return $this->belongsTo(student::class);
    }
    public function course(){
        return $this->belongsTo(course::class);
    }
    public function badge(){
        return $this->belongsTo(badge::class);
    }

}
