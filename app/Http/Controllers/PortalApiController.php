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


        $finduserbyemail = User::where('email',$request->body['email'])->get();

        if(count($finduserbyemail) == 0){

            $users = User::create($request->body);
            return response()->json([
                'status' => 'success',
                'data' => $users,
                'message' => "User Created Successfully"
            ]);
        }
        else{
            return response()->json([
                'status' => 'fail',
                'message' => "Error!"
            ]);
        }

    }
    public function show($id){
        return User::find($id);

    }

    public function edit($id){
        return User::find($id);

    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $user->update($request->body);
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
