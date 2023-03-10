<?php

use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\UserController;
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

// Route::middleware('auth:api')->get('/admin', function (Request $request) {
//     return $request->user();
// });



// 获取数据
Route::get('/getuser', [UserController::class,'index']);
// 添加
Route::post('/add', [UserController::class,'add']);
// 删除
Route::delete('/deletes', [UserController::class,'deletes']);
// 修改
Route::put('/updates', [UserController::class,'updates']);
