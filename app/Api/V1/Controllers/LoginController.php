<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;
use Dingo\Api\Routing\Helpers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{

    use AuthenticatesUsers;
    use Helpers;

    public function show(){
        return view("logins");
    }

    public function login(Request $request)
    {       var_dump($request->all());die;
        $user=User::where('name',$request->email)->orwhere('email',$request->email)->firstOrFail();
        var_dump($user);
        if($user && Hash::check($request->password,$user->password)){
            $token=JWTAuth::fromuser($user);
            $this->clearLoginAttempts($request);
            return $this->response->array([
                'token'=>$token,
                'message'=>"Login Success",
                'status_code'=>200
            ]);
        }
        else{
            throw new UnauthorizedHttpException("Login Failed");

        }
    }
    public function logout(){
        JWTAuth::invalidate(JWTAuth::getToken());
        $this->guard()->logout();

    }

}
