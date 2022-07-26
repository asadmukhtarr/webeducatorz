<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\trainer;

class category extends Model
{
    use HasFactory;
    public function trainer(){
        return $this->hasMany(trainer::class);
    }
    public function course(){
        return $this->belongsTo(category::class);
    }
}
