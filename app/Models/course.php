<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\visits;
use App\Models\badge;
class course extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function badges(){
        return $this->hasMany(badge::class);
    }

    public function visits(){
        return $this->hasMany(visit::class);
    }
}
