<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\User;

class PortalApiController extends Controller
{
    public function createusers(){
    	return response()->json([
                'status' => 'success'
            ]);
    } 
}
