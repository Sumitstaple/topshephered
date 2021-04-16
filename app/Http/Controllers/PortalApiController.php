<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\User;

class PortalApiController extends Controller
{

    public function index(){
        $users = User::all();
        return response()->json([
            'data' => $users
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $finduserbyemail = User::where('email',$request->email)->get();
        //return $finduserbyemail;

            $users = User::create($request->all());
            return response()->json([
                'status' => 'success',
                'data' => $users
            ]);



    }
    public function show($id){
        return User::find($id);

    }

    public function edit($id){
        return User::find($id);

    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email']
        ]);
        $user = User::find($id);
        $user->update($request->all());
        return response()->json([
            'status' => 'success',
            'message'=> 'user updated successfully',
            'data' => $user
        ]);
    }
    public function destroy($id){
        $user= User::destroy($id);
        return response()->json([
            'status' => 'success',
            'message'=> 'user deleted successfully',
            'data' => $user
        ]);
    }

    public function search($email){
        return User::where('email', 'like', '%'.$email.'%')->get();
    }


}
