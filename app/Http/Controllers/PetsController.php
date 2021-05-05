<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

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
        $pets = new Pets();
        $pets->name = $request['name'];
        $pets->dateOfBirth= $request['dateOfBirth'];
        $pets->status= $request['status'];
        $pets->gender= $request['gender'];
        $pets->genderNomenclature= $request['genderNomenclature'];
        $pets->breed= $request['breed'];
        $pets->breedType= $request['breedType'];
        $pets->breedQuality= $request['breedQuality'];
        $pets->breedPurpose= $request['breedPurpose'];
        $pets->markingsOrColor= $request['markingsOrColor'];
        $pets->description= $request['description'];
        $pets->title= $request['title'];
        $pets->userId= 12;
        $pets->industry= 'Dog';

        if($pets->save()){
           return response()->json([
                'status' => 'success',
                'data' => $pets,
                'message' => "Pet Created Successfully"
            ]); 
        }
        else{
            return response()->json([
                'status' => 'fail',
                'message' => "Error when creating pet"
            ]); 
        }
        
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

    public function uploadvideo(Request $request){

        // return $request->video;
        $videoname = uniqid().'.mp4';
        $contents = file_get_contents($request->video->path());

        // $newPath = $request->video->store();
        if(file_put_contents(public_path().'/videos/'.$videoname, $contents)){
            return response()->json([
            'status' => 'success',
            'video'=> $videoname,
            ]);
        }
        else{
            return response()->json([
            'status' => 'fail'
            
        ]);
        }
    }

    public function saveexternal(Request $request){  

        $pets = Pets::Find($request->id);
        $pets->externalAgency= $request->agencies; 

         if($pets->save()){
           return response()->json([
                'status' => 'success',
                'message' => "External Agency Saved Successfully"
            ]); 
        }
        else{
            return response()->json([
                'status' => 'fail',
                'message' => "Error When Saveing External Agency"
            ]); 
        }

    }

    public function savecertification(Request $request){  

        $pets = Pets::Find($request->id);
        $pets->certificationAgency= $request->agencies; 

         if($pets->save()){
           return response()->json([
                'status' => 'success',
                'message' => "Certification Agency Saved Successfully"
            ]); 
        }
        else{
            return response()->json([
                'status' => 'fail',
                'message' => "Error When Saveing Certification Agency"
            ]); 
        }

    }

    public function getfather(){ 


        $pets = Pets::where([['gender','male'],['title','parent']])->get();
        
           return response()->json([
                'status' => 'success',
                'pets' => $pets
            ]); 

    }
    public function getfatherbyid($id){ 


        $pets = Pets::where('id',$id)->get();
        
           return response()->json([
                'status' => 'success',
                'pets' => $pets
            ]); 

    }

    public function getmother(){ 


        $pets = Pets::where([['gender','female'],['title','parent']])->get();
        
           return response()->json([
                'status' => 'success',
                'pets' => $pets
            ]); 

    }

    public function savemother(Request $request){

       $pets = Pets::find($request->petid);

       $pets->mother= $request->id;
       if($pets->save()){
            return response()->json([
                'status' => 'success',
            ]);
       }
       else{
            return response()->json([
                'status' => 'fail',
            ]);
       }

    }
      public function savefatherid(Request $request){

       $pets = Pets::find($request->petid);

       $pets->father= $request->id;
       if($pets->save()){
            return response()->json([
                'status' => 'success',
            ]);
       }
       else{
            return response()->json([
                'status' => 'fail',
            ]);
       }

    }
    public function saveprice(Request $request){

       $pets = Pets::find($request->id);

       $pets->priceType= $request->priceType;
       $pets->fixedPrice= $request->fixedPrice;
       $pets->toPrice= $request->toPrice;
       $pets->fromPrice= $request->fromPrice;
       $pets->notPricedText= $request->notPricedText;
       $pets->priceUnits= $request->priceUnits;
       if($pets->save()){
            return response()->json([
                'status' => 'success',
                'data'=>$pets
            ]);
       }
       else{
            return response()->json([
                'status' => 'fail'
            ]);
       }

    }

    public function savevideos(Request $request){

       $pets = Pets::find($request->id);

       $pets->videos= $request->videos;
       if($pets->save()){
            return response()->json([
                'status' => 'success',
                'data'=>$pets
            ]);
       }
       else{
            return response()->json([
                'status' => 'fail'
            ]);
       }

    }


    public function uploadimage(Request $request){
        // return $request;
        $imagename = uniqid().'.png';
        $img = Image::make( $request->images); 
        $img->save(public_path().'/petimages/'.$imagename); 

        return response()->json([
            'status' => 'success',
            'image'=>$imagename
        ]);
    

    }

    public function saveimages(Request $request){
 
       $pets = Pets::find($request->id);

       $pets->images= $request->images;
       if($pets->save()){
            return response()->json([
                'status' => 'success',
                'data'=>$pets
            ]);
       }
       else{
            return response()->json([
                'status' => 'fail'
            ]);
       }

    }
}
