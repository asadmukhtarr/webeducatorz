<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrantPermission extends Model
{
    use HasFactory;
    protected $table = 'roles_permissions';
}
