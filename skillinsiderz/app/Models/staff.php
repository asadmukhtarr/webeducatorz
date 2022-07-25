<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\desingation;
class staff extends Model
{
    use HasFactory;
    public function designation(){

        return $this->belongsTo(designation::class);
    }
}
