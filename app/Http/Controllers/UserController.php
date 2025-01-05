<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function getuser( $name){

        return view("welcome",['name'=>$name]);
    }


    function aboutuser(){

        return view("about");
    }
}
