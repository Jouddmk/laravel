<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\UsersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index(){
        $users= users::all();
        return response()->json($users);
    }
    function pepole(Request $request){
        $users=users::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'address'=>$request->address,
            'mobile_number'=>$request->mobile_number,
            'gender'=>$request->gender,
            'photo'=>$request->photo,
        ]);
            return view('User', compact('users'));

        return response()->json($users);
    }
    function update(Request $request,$id){
        $users= users::find($id);
        $users->update(
            $request-> all()
        );
        return response()->json($users, 200);
    }
    function show($id){
        $users= users::find($id);
        return response()->json($users, 200);
    } function del($id){
        $users= users::find($id);
        $users->delete();
        return response()->json($users, 200);
        }
}