<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\trainer;
use App\Models\badge;
class assigntrainer extends Model
{
    use HasFactory;
    public function trainer(){

        return $this->belongsTo(trainer::class);

    }
    // badge ..
    public function badge(){
        return $this->belongsTo(badge::class);
    }
}
