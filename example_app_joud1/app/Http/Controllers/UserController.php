<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        // dd($users);
        return view('users.index');
    }
        public function pepole(Request $request){ 
            // dd('hello new people');
            // dd ( $request)
            return view('users.index');
            
            // $users=User::create([
            //     'name'=>$request->name,
            //     'email'=>$request->email,
            //     'password'=>$request->password,
            //     'address'=>$request->address,
            //     'mobile_number'=>$request->mobile_number,
            //     'gender'=>$request->gender,
            //     'photo'=>$request->photo,
            // ]);
        
        }


}
