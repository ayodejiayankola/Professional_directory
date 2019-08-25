<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class AuthController extends Controller
{
   
    public function register(Request $request){
        $validatedData = $request->validate([
            'name'=>'required | max:55',
            'business_name'=>'required | max:55',
            'service'=>'required | max:55',
            'business_address'=>'required | max:100',
            'phone'=>'required | max:12 | unique:users',
            'password'=>'required | confirmed'

        ]);
        $validatedData['password'] = bcrypt($request->password);
        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['user'=>$user, 'access_token'=>$accessToken]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
           
            'phone'=>'required',
            'password'=>'required'   
        ]);

        if(!auth()->attempt($loginData)){
            return response(['mesage'=>'incorrect login details']); 
        }
   $accessToken = auth()->user() ->createToken('authToken')->accessToken;
        return response(['user'=>auth()->user(), 'access_token'=>$accessToken]);
    }
}
