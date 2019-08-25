<?php

namespace App\Http\Controllers;


use App\User;


use App\Http\Requests; 
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users=  User::paginate(5);

        //Retuurn collection of artisan as a resource

        return UserResource::collection($users);
    }


    
    public function search(Request $request){
        //search for artisan based on location and service

   
        $service = $request->get('service');
        $business_address = $request->get('business_address');
 

        $result= User::where([['service', 'like', "%$service%"],['business_address','like',"%$business_address%"]])->get();

       return UserResource::collection($result);
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         

            //Get a single Artisan
        $user = User::findOrFail($id);
        //Return single Artisan as a resource
        return new UserResource($user);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
