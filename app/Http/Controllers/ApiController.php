<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
     function getData(){
        return
         [
            "name"=>"Bishal",
            "age"=>24,
            "city"=>"Haraiya",
            "gender"=>"male"
        
        ];
         
     }
}
