<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){

        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('personal_token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json($response);
    }

    public function login(Request $request){

        if (!Auth::attempt($request->only('name', 'password'))) {
            return response()->json([
                'message' => 'Authentication failed.',
            ], 401);
        }

        $request->session()->regenerate();
//        $fields = $request->validate([
//            'name' => 'required',
//            'password' => 'required'
//        ]);
//
//        //Check email
//
//        $user = User::where('name', $fields['name'])->first();
//
//        //Check password
//
//        if(!$user || Hash::check($fields['password'], $user->password) === false) {
//            return response([
//                'message' => 'Bad credentials'
//        ], 401);
//            }
//
//        $token = $user->createToken('personal_token')->plainTextToken;
//
//        $response = [
//            'user' => $user,
//            'token' => $token
//        ];
//
//        return response()->json($response);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return [
            'message' => 'User Logged Out'
        ];
    }
    //
}
