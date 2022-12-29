<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    public function login(LoginRequest $request) {

        $credentials = $request->post();

        if (!Auth::attempt($credentials)) {
            return response([
                'errorMessage' => 'Incorrect user credentials!'
            ]);
        }

        /**
         * @var User $user
         */
        $user = Auth::user();

        $token = $user->createToken('main')->plainTextToken;
        
        return response([
            'user'  => $user,
            'token' => $token
        ]);

    }
    public function signup(SignupRequest $request) {

        $data = $request->post();

        /**
         * @var User $user
         */
        $user = User::create([
            'user'     => $data['user'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $token = $user->createToken('main')->plainTextToken;

        return response([
            'user'  => $user,
            'token' => $token
        ]);
    }

    public function logout(Request $request) {
        
        /**
         * @var User $user
         */
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response('', 204);
    }
}