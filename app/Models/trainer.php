<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\badge;
class trainer extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function badge(){
        return $this->hasMany(badge::class);
    }
}