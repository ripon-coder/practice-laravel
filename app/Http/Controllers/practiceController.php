<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class practiceController extends Controller
{
    public function manyToMany(){
      $user = User::find(1);
 
        foreach ($user->roles as $role) {
            echo $role;
        }
    }
}
