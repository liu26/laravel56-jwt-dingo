<?php
/**
 * Created by PhpStorm.
 * User: sl
 * Date: 2018/10/31
 * Time: 下午5:32
 */

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Facades\JWTAuth;
//use App\User;
use App\_test_attempt;
use Illuminate\Support\Facades\Auth;
use Dingo\Api\Routing\Helpers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function show(){

        return view("logins");

    }

   public function tst(Request $request)
   {

       //表单提交数据与数据表进行查询
     //  $user=_test_attempt::where('name',$request->name)->orwhere('password',$request->password)->firstOrFail();
      // dd($user);
       $credentials = request(['email', 'password']);
       $token=JWTAuth::attempt($credentials);
       return $token;

      /* $credentials = request(['email', 'password']);
       if (! $token = auth('api')->attempt($credentials)) {
           return response()->json(['error' => 'Unauthorized'], 401);
       }

       return $this->respondWithToken($token);*/
   }




    public function me()
    {
        return response()->json(auth('api')->user());
    }

    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

}
