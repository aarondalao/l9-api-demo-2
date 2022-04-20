<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use phpseclib3\Common\Functions\Strings;
use Validator;

class PassportAuthController extends Controller
{
    //



    public function register(Request $request)
    {

        // extracts name, email and password from request
        $this->validate($request, [
            'name' => ['required','min:4'],
            'email' => ['required','email'],
            'password' => ['required','min:8'],
        ]);


        // adds user to User Table, encrypting the password
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);




        // create a token
        $token = $user->createToken('Laravel9PassportAuth')->accessToken;




        //returns token in JSON format string and HTTP status code of 200(OK response)
        return response()->json(['message'=> 'USER CREATED SUCCESSFULLY','token' => $token], 200);
    }

    public function login(Request $request)
    {
        // extracts email and password from request
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];




        //attempts to authenticate against the user table
        // if authenticated:
        // create a token and return token as JSON with 200 response status code
        // otherwise:
        //return error and message as JSON plus 401 response status code (unauthorized)
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Laravel9PassportAuth')->accessToken;
            return response()->json([
                'token' => $token
            ], 200);
        } else {
            return response()->json([
                'error' => 'Unauthorized'
            ], 401);
        }
    }

    public function userInfo()
    {
//      obtains the record for the logged-in user
        $user = auth()->user();


//      returns the record as a json string
//      and a http response of 200
        return response()->json(['user' => $user], 200);


    }
}

//first user :
//name: aaron dalao
//email: qwer_ty123@hotmail.com
//email: qwer_ty123@hotmail.com
//password: Pa$$w0rd123
