<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\CasesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Input;
use Form;
use Html;
use DB;
use App\Cases;
use App\Children;
use App\Rooms;
use App\Partners;
use App\Roommates;
use App\Income;
use App\Support;
use App\Debts;

class ApiController extends Controller
{

    public function signIn(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'access_code' => 'required|in:Y5LbAN9ei6pgovLybld6Qmslrskm8h0eg6ErA7kYAFA',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => 'Validation Error',
                'result'  => $validator->errors(),
            ];
            return response()->json($response, 402);
        }

        $signInAttempt = User::where('email', $request->email)->first();
        if(Hash::check($request->password, $signInAttempt->password)){
//            Auth::loginUsingId($signInAttempt->id, true);
            $response = [
                'message' => 'Login Success',
                'result'  => $signInAttempt->id,
            ];
            return response()->json($response, 200);
        }
        $response = [
            'message' => 'Wrong Credentials',
            'result'  => '',
        ];
        return response()->json($response, 500);

    }


}