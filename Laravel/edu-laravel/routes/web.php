<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { // get,post 확인후 '/'는 웹주소에 localhost/ <- 여기뒤에 작성 이렇게 붙여줌
    return view('welcome'); // resource->view->welcome php 파일 실행
});

// ------------------------
// 라우트 정의
// ------------------------
// 문자열 리턴
Route::get('/hi', function() {
    return '안녕하세요';
});

// 뷰 리턴(뷰 파일이 없으면 에러발생, 디버그 모드 설정이 false면 500에러, true면 에러의 상세정보 출력)
Route::get('/myview', function() {
    return view('myview');
});

// ------------------------
// HTTP 메소드 대응하는 라우터
// 여러 라우터에 해당될 경우 가장 마지막에 정의 된 것이 실행
// ------------------------
Route::get('/home', function() {
    return view('home');
});

// GET 요청에 대한 처리
Route::get('/method', function() {
    return 'GET Method!!';
});

// POST 요청에 대한 처리
Route::post('/method', function() {
    return 'POST Method!!';
});

// PUT 요청에 대한 처리
Route::put('/method', function() {
    return 'PUT Method!!';
});

// Delete 요청에 대한 처리
Route::delete('/method', function() {
    return 'Delete Method!!';
});

// 모든 요청에 대한 처리  ref)  가장 밑에것 부터 먼저 시작되는 방식(any가 최상단에 있으면 맨 마지막부터 시작해서 delete, put, post, get이 각각 실행)
Route::any('/method', function() {
    return 'ANY Method';
});

// 특정 여러 메소드 요청에 대한 처리
Route::match(['get','post'], '/method', function() {
    return 'MATCH Method';
});

// ------------------------
// 라우트에서 파라미터 제어
// ------------------------
// 쿼리 스트링으로 파라미터 획득 (http://localhost/query 이렇게 입력하면 ','가 출력되고 http://localhost/query?id=admin&name=kim을 입력하면 admin,kim이 출력) => get,post 상관 x
Route::get('/query', function(Request $request) {       //타입힌팅: $request의 타입을 request로 지정
    return $request->id.",".$request->name;
});

// url 세그먼트(segment)로 지정 파라미터 획득 : http://localhost/query/1 <= 이런식으로 '/' 슬러시 사용하는걸 뜻함(여기선 id=1이 되는것) ref) {} 이건 키이름
Route::get('/segment/{id}', function($id) {
    return ' segment ID : '.$id;
});

// url 세그먼트로 지정하여 파라미터 획득 : 기본값 설정 => '/'뒤에 키값과 ? 작성후 function에 base 입력시 디폴트값 base 설정 ex)페이징
Route::get('/segment2/{id?}', function($id = 'base') {
    return ' segment2 ID : '.$id;
});

// // request로도 세그먼트 파라미터 획득(세그먼트 파라미터가 없어도 404에러 안뜸)
// Route::get('/segment2/{id?}', function(Request $request) {
//     return ' segment2 ID : '.$request->id;
// });

// ------------------------
// 라우트의 별칭
// ------------------------
Route::get('/names/home', function() {
    return view('nameshome');
});

Route::get('/names', function() {
    return 'name.index';
})->name('names.index');

// ------------------------
// 라우트 매칭 실패시 대체 라우트 정의
// 보통 가장마지막에 에러처리 정의
// ------------------------
Route::fallback(function() {
    return "잘못된 경로로 접속 하셨습니다";
});

// ------------------------
// 라우트의 그룹 및 공통 경로 설정
// ------------------------
// 공통경로 middleware(auth)는 로그인 되어있는지를 전이나 후에 체크후 안되어있으면 지정경로 이동, prefix는 그룹으로 공통경로 지정
Route::middleware('auth')->prefix('users')->group(function() {
    Route::get('/login', function() {
        return 'Login!!';
    })->name('users.login');
    Route::get('/logout', function() {
        return 'Logout!!';
    })->name('users.logout');
    Route::get('/registration', function() {
        return 'registration!!';
    })->name('users.registration');
});

// ------------------------
// 서명 라우터
// ------------------------
use Illuminate\Support\Facades\URL;
Route::get('/makesign', function() {
    // 일반 url 링크 생성
    $baseUrl = route('sign');

    // 서명된 URL 링크 생성하기(한번 만들면 지속되어서 사용 x)
    // $signUrl = URL::signedRoute('invitations', ['invitation' => 5816, 'group' => 678]);
    $signUrl = URL::signedRoute('sign');

    // 유효기간이 있는 서명된 url 링크 생성하기 (10초만 생성후 만료, 재요청하면 재생성)
    $limitSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(10));

    return $baseUrl."<br><br>".$signUrl."<br><br>".$limitSignUrl;
});

// Route::get('/invitations/{invitation}/{group}', function() { ) // 보안성을 높여서 링크가 계속 바뀌기 때문에 사용
Route::get('/sign', function() {
    return "Sign!!";
})->name('sign')->middleware('signed');

// ------------------------
// 컨트롤러
// ------------------------
// 커맨드로 컨트롤러 생성 : php artisan make:controller TestController
use App\Http\Controllers\TestController;
Route::get('/test', [TestController::class, 'index'])->name('tests.index');


// 커맨드로 컨트롤러 생성 : php artisan make:controller TasksController --resource    => controller 안에 메소드들 생성
use App\Http\Controllers\TasksController;
Route::resource('/tasks', TasksController::class);
// 목록 불러오는 커맨드 : php artisan route:list
// GET|HEAD        tasks ................................................ tasks.index › TasksController@index  
// POST            tasks ................................................ tasks.store › TasksController@store  
// GET|HEAD        tasks/create ......................................... tasks.create › TasksController@create  
// GET|HEAD        tasks/{task} ......................................... tasks.show › TasksController@show  ref) {}은 값을 아무거나 입력(보통 숫자)
// PUT|PATCH       tasks/{task} ......................................... tasks.update › TasksController@update  
// DELETE          tasks/{task} ......................................... tasks.destroy › TasksController@destroy  
// GET|HEAD        tasks/{task}/edit .................................... tasks.edit › TasksController@edit


use App\Http\Controllers\BladeController;
Route::get('/blade', [BladeController::class, 'index'])->name('blade.index');

use App\Http\Controllers\BoardController;
Route::resource('/board', BoardController::class);
