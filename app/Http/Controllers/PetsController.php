<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pets::all();
        return response()->json([
            'data' => $pets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pets = Pets::create($request->body);
            return response()->json([
                'status' => 'success',
                'data' => $pets,
                'message' => "Pets Created Successfully"
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function show(Pets $pets,$id)
    {
        return Pets::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function edit(Pets $pets,$id)
    {
        return Pets::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pets $pets, $id)
    {
        
        $pets = Pets::find($id);
        $pets->update($request->body);
        return response()->json([
            'status' => 'success',
            'message'=> 'pet updated successfully',
            'data' => $pets
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pets $pets,$id)
    {
        $pets= Pets::destroy($id);
        return response()->json([
            'status' => 'success',
            'message'=> 'pet deleted successfully',
            'data' => $pets
        ]);
    }
}
