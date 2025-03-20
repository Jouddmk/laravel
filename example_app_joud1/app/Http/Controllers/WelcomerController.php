<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomerController extends Controller
{
    public function hi(){
        return "hello";
    }
    function index(){
        $users=[['id'=>1,'name'=>"joud"],['id'=>2,'name'=>"ahmad"],['id'=>3,'name'=>"omer"]];
    //  return response()->json($users);
    print_r($users);
    } 
    function check($id){
        if ($id>10){
            return  "access denied . id exceeds the allowed limt";
        }else{
            return $id;
        }

    }

}
