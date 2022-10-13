<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\badge;
use App\Models\tasks;
class assignment extends Model
{
    use HasFactory;

    function badge(){
        return $this->belongsTo(badge::class);
    }
    function task(){
        return $this->hasMany(task::class);
    }
}
