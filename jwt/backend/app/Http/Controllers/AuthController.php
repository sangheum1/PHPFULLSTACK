<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\JWT;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $obj_jwt;
    public function __construct() {
        $this->obj_jwt = new JWT();
    }
    /*
        jwt토큰 생성
    */
    function issueToekn(Request $req) {
        Log::debug("-------------issueToken Start-----------");
        Log::debug("id", $req->only('id'));
        // 아이디, 비번 유효성 체크

        // db에서 유저 검색

        // jwt 생성
        $token = $this->obj_jwt->createJWT($req->only('id'));
        Log::debug("token : ". $token);
        Log::debug("-------------issueToken End-----------");

        $response = [
            'errflg' => '0',
            'token' => $token
        ];
        // // return 첫번째 방식
        // return $response;

        // return 두번째 방식
        return response(json_encode($response), 200);
    }

    /*
        토큰 검증용
    */
    public function chk(Request $req) {
        $token = $req->header('Authorization');

        $response = [
            'errflg' => '0',
            'msg' => 'OK'
        ];
        $status = 200;

        if( !($this->obj_jwt->chkToken($token)) ) {
            $response = [
                'errflg' => '1',
                'msg' => '유효한 토큰이 아닙니다.'
            ];
            $status = 401;
        }
        
        return response(json_encode($response), $status);
    }
}
