<?php

namespace App\Http\Controllers;


use Carbon\Carbon;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Users;

class AuthController extends Controller
{
    // sign in
    public function signin(Request $req) {
     
        $dataCheck = [
            'email' => $req->email,
            'password' => $req->password
        ];

        // check user
        if (Auth::attempt($dataCheck)) {      
            if ($req->email == 'admin@gmail.com') {
                return response()->json([
                    'code' => 200,
                    'user' => 'admin',
                ]);
            } else {
                return response()->json([
                    'code' => 200,
                    'user' => Auth::user(),
                ]);
            }
        } else {
            return response()->json([
                'code' => 401,
                'data' => 'invalid',
            ]);
        }
    }

    // sign up
    public function signup(Request $req) {
        $data = $req->params['data']; 

        $checkEmail = Users::where('email', $data['email'])->first();

        switch ($checkEmail) {
            case true:
                return response()->json([
                    'code' => 400,
                    'message' => 'Email is existed'
                ]);
                break;
            case false:
                if ($data['confirm_password'] !== $data['password']) {
                    return response()->json([
                        'code' => 400,
                        'message' => 'Password is not matched'
                    ]);
                } else {
                    $insert = Users::insert([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'password' => Hash::make($data['password']),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                    return response()->json([
                        'code' => 200,
                        'message' => 'success'
                    ]);
                }
        }
    }

    public function forgotPassword(Request $request)
    {
        
        $data = $request->params['data']; 
       
        $checkEmail = Users::where('email', $data['email'])->first();

        switch ($checkEmail) {
            case false:
                return response()->json([
                    'code' => 400,
                    'message' => 'Account is not authenticate'
                ]);
                break;
            case true:
                if ($data['confirm_password'] !== $data['password']) {
                    return response()->json([
                        'code' => 400,
                        'message' => 'Password is not matched'
                    ]);
                } else {
                    $update = Users::where('email', $data['email'])->update([
                        'password' => Hash::make($data['password']),
                        'updated_at' => Carbon::now()
                    ]);
                    if ($update) {
                        return response()->json([
                            'code' => 200,
                            'message' => 'success'
                        ]);
                    } else {
                        return response()->json([
                            'code' => 500,
                            'message' => 'error'
                        ]); 
                    }
                }
                break;
            
        }
    }
}
