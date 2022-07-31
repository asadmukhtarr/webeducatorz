<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\enrollment;
use App\Models\course;
use App\Models\fee;
class student extends Model
{
    protected $table = "students";
    use HasFactory;
    public function enrollment(){

        return $this->hasMany(enrollment::class);
    }
    public function course(){
        return $this->belongsTo(course::class);
    }
    public function fee(){
        return $this->hasMany(fee::class);
    }
}
