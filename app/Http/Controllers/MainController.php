<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{


function index(){
    $name = 'Abod';
    $age = 23;
    //return view ('index')->with('name',$name); هاي الطريقة الاولى

    /*return view ('index', [ هاي الطريقة الثانية
      'name'=>$name,
      'age'=>$age

    ]);*/

    return view ('index',compact('name','age'));




}    


function about(){
    return 'about page';
}    


function contact(){
    return 'contact page';
}    


function searvices(){
    $searvices = [
        [1,'Searvice Name 1','100'],
        [2,'Searvice Name 2','200'],
        [3,'Searvice Name 3','300'],
        [4,'Searvice Name 4','400']
 
    ];
   return view ('searvices',compact('searvices'));
}   

function post($id = null){
    return $id;
}
    
}

