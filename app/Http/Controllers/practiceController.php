<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class practiceController extends Controller
{
    public function manyToMany(){
      $user = User::find(5);


        foreach ($user->userroles as $role) {
            echo $role;
        }
    }
}
