<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\User;
class userrole extends Model
{
    use HasFactory;
    protected $table = 'users_roles';
    public function user(){

        return $this->belongsTo(User::class);
    }
    public function role(){

        return $this->belongsTo(Role::class);
    }

}
