<?php

namespace App\Lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT{
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';
    /*
        jwt 생성
    */
    public function createJWT(Array $data) {
        Log::debug("-------------createJWT Start-----------");

        // header 작성
        $header_json = json_encode([
            'alg' => $this->alg ,
            'typ' => 'JWT'
        ]);
        $header = base64_encode($header_json);

        // json의 str 형태라서 그냥 나옴
        Log::debug("header : ". $header);
        // payload 작성 (토큰에 담을 정보)
        $iat = time();
        $exp = $iat + 60;
        $payload_json = json_encode([
            'id' => $data['id'],
            'iat' => $iat,
            'exp' => $exp
        ]);
        // json화 한걸 암호화 시키기
        $payload = base64_encode($payload_json);
        Log::debug("payload : ". $payload);

        // signature 작성(한번더 암호화 시키기,)
        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug("signature : ". $signature);

        Log::debug("------- createJWT End --------");
        return $header.".".$payload.".".$signature;
    }
    public function chkToken( $token ) {
        // // 받아온 토큰 분리
        // $arr_token = explode(".", $token);

        // $header = $arr_token[0];
        // $payload = $arr_token[1];
        // $signature = $arr_token[2];

        // // 검증용 signature 생성
        // $verify = hash($this->alg, $header.$payload.$this->secret_key);

        // if($signature !== $verify ) {
        //     return false;
        // }

        // return true;

        Log::debug('chkToken start');
        Log::debug('token'.$token);
        try{
        // 받아온 토큰 분리
        $arr_token = explode(".", $token);

        $header = $arr_token[0];
        $payload = $arr_token[1];
        $signature = $arr_token[2];

        // 토큰 유효기간 확인
        $arr_payload = json_decode(base64_decode($payload));
        if(time() > $arr_payload->exp) {
            throw new Exception('exp 초과');
        }

        // 검증용 signature 생성
        $verify = hash($this->alg, $header.$payload.$this->secret_key);

        if($signature !== $verify ) {
            throw new Exception('signature 다름');
        }

        } catch(Throwable $th) {
            Log::debug('Error : '.$th->getMessage());
            return false;
        } finally {
            Log::debug('Signature End');
        }
        return true;
    }
}
?>