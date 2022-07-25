<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;
use App\Models\assigntrainer;
use App\Models\room;
use App\Models\slot;
use App\Models\enrollment;
use App\Models\lecture;
class badge extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongsTo(course::class);
    }

    public function student(){
        return $this->hasMany(enrollment::class);
    }

    public function assigntrainer(){
        return $this->hasOne(assigntrainer::class);
    }

    public function room(){
        return $this->belongsTo(room::class);
    }

    public function lectures(){
        return $this->hasMany(lecture::class);
    }

    public function slot(){
        return $this->belongsTo(slot::class);
    }
}
