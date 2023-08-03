<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// 아이디, 이름, 발급시간 정도만 json 보내줌(공유키, 비밀키, 단방향 암호화, 복호화 찾아보기)
Route::get('/token', [AuthController::class, 'issueToekn']);
Route::get('/chk', [AuthController::class, 'chk']);