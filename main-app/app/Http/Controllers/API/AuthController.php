<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    public function login(Request $request){
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            $user = Auth::user();
            $result['token'] = $user->createToken('MdpApp')->plainTextToken;
            $result['name'] = $user->name;

            return $this->sendSuccess($result, 'Login berhasil');
        }
        else{
            return $this->sendError('Login Gagal');
        }
    }

    public function register(Request $request) {
        $validateData = Validator::make($request-> all(), [
            'name' => ' required',
            'email' => ' required',
            'password' => ' required|same:password',
            'c_password' => ' required',
        ]);

        if($validateData->fails()){
            return $this->sendError('Validation Error', $validateData->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user-> createToken('MdpApp')-> plainTextToken;
        $success['name'] = $user->name;

        return $this->sendSuccess($success, 'Berhasil registrasi');
    }
}
