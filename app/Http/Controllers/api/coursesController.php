<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class coursesController extends Controller
{
    // Asad Mukhtar .. ..
    public function courses(){
        $fees = User::all();
        if(count($fees) > 0){
            $data = [
                'status' => 200,
                'data' => $fees
            ];
        } else {
            $data = [
                'status' => 401,
                'data' => null
            ];
        }
       return $fees;
      //  return repsonse($fees)->json();
    }
}
