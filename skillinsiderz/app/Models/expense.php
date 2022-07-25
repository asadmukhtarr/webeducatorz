<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\expensecategory;
class expense extends Model
{
    use HasFactory;
    public function expensecategory(){

        return $this->belongsTo(expensecategory::class);
    }
}
