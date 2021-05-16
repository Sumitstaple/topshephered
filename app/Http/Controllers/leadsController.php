<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leads;

class LeadsController extends Controller
{
    public function index(){
        $Leads = Leads::all();
        return response()->json([
            'data' => $Leads
        ]);
    }
    public function store(Request $request){

        $Leads = new Leads();
        $Leads->fname = $request['fname'];
        $Leads->lname= $request['lname'];
        $Leads->email= $request['email'];
        $Leads->type= $request['type'];
        $Leads->message= $request['message'];
        $Leads->contactnumber= $request['contactnumber'];
        $Leads->save();
        return response()->json([
            'status' => 'success',
            'message'=> 'Data added successfully',
            'data' => $Leads
        ]);

    }
    public function show($id){
        return Leads::find($id);

    }

    public function edit($id){
        return Leads::find($id);

    }

    public function update(Request $request,$id){
        $Leads = Leads::find($id);
        //return $Leads;
        $Leads->update($request->all());
        return response()->json([
            'status' => 'success',
            'message'=> 'Leads updated successfully',
            'data' => $Leads
        ]);
    }
    public function destroy($id){
        $Leads= Leads::destroy($id);
        return response()->json([
            'status' => 'success',
            'message'=> 'Leads deleted successfully',
            'data' => $Leads
        ]);
    }

    public function search($email){
        return User::where('email', 'like', '%'.$email.'%')->get();
    }

}
