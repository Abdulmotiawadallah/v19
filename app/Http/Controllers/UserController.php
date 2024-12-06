<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function user($name ,$age){

    $name = 'Abod';
    $age = 23;
    return view ('user',compact('name','age'));

   }
}
