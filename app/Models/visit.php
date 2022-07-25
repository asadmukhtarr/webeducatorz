<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;
class visit extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongsTo(course::class);
    }
}
