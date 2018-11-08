<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
//实例化API路由
$api = app('Dingo\Api\Routing\Router');


//第一版本分组
$api->version('v1',function ($api){
    //表单页
    $api->post('test','App\Api\V1\Controllers\TestController@tst');
    $api->get('show','App\Api\V1\Controllers\TestController@show');
   // $api->get('show','App\Api\V1\Controllers\RegisterController@show');
    //接收页
    //$api->post('test', 'App\Api\V1\Controllers\TestController@tst');


});


