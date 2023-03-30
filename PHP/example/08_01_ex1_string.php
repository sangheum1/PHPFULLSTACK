<?php

//  문자열 합치기
// $str_1 = "aaa";
// $str_2 = "bbb";
// $str_sum = $str_1.$str_2;

// echo $str_sum;

// 대소문자 변환 (upper 대문자, lower 소문자, 젤 앞에만 대문자 ucfirst, 각 단어의 맨 앞글자만 대문자로 변환)
// $str_en = "abcd efgh";
// echo strtoupper($str_en),"\n";
// echo strtolower($str_en),"\n";
// echo ucfirst($str_en),"\n";
// echo ucwords($str_en),"\n";

// url 관련 함수 (필요한 정보들만 추출하기 위해 사용)
// $url = "https://www.google.com/search?q=php+%EC%83%81%EC%88%98+%EC%82%AC%EC%9A%A9&ei=CvsjZJHKD8So2roPuPGCkAM&ved=0ahUKEwiR98Sq4ID-AhVElFYBHbi4ADIQ4dUDCA8&uact=5&oq=php+%EC%83%81%EC%88%98+%EC%82%AC%EC%9A%A9&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIFCAAQgAQ6CggAEEcQ1gQQsAM6BQghEKABOgQIABAeOgYIABAeEA86BggAEAgQHjoICAAQCBAeEA9KBAhBGABQ6gdYgx9gtiBoAnABeACAAXuIAbEHkgEDOS4xmAEAoAEByAEKwAEB&sclient=gws-wiz-serp";
// $arr_url = parse_url($url);
// var_dump($arr_url);

//url에 저장된 함수를 나눠서 저장해주는데 그것을 저장해주는 곳을 변수로 나타내야함
// parse_str($arr_url["query"], $arr_parse);
// var_dump($arr_parse);


// 역순의 문자열
$str_abcd = "abcd";
echo strrev($str_abcd);

// 문자열 자르기 (한글은 3byte)
$str_1 = "가나다라";
echo substr($str_1, 2)."\n";
echo mb_substr($str_1, 2)."\n";  // 글자개수를 2개 자름
echo mb_substr($str_1, 2, 1)."\n";  // 글자개수를 자르는데 2번째 부터시작해서 1개 자름
echo mb_substr($str_1, -2)."\n";

$str_tng = "안녕하세요. PHP입니다.";
// echo mb_substr($str_tng,7)."\n";
// echo mb_substr($str_tng,-7)."\n";
echo mb_substr($str_tng, 3, 5)."\n";
echo mb_substr($str_tng, -11, -6)."\n";

// 문자열 빈공간 지우기 (계행, tab도 빈공간으로 인식)
// rtrim은 오른쪽 여백 삭제, ltrim은 왼쪽 여백 삭제
$str_trim = "      abcd             \n";
echo ltrim($str_trim),"\n";
echo rtrim($str_trim),"\n";

// 문자열 길이 구하는 함수
$str_len = "가나다라";
echo mb_strlen($str_len),"\n";

// 문자열 포맷에 따라 출력하는 함수
define("welcome", "안녕하세요. %s님.");
printf(welcome, "홍길동");
printf("안녕하세요. %s입니다.", "php");
echo "\n";

// 기본 포맷 : error(숫자) : XXX ERROR가 발생했습니다.
// 에러 번호 : 에러종류
    //1 : 시스템
    //2 : 로그인
    //3 : 접속

define("ERROR_MSG", "ERROR(%d) : %s ERROR가 발생했습니다.");
printf(ERROR_MSG, 1, "시스템");
echo "\n";
printf(ERROR_MSG, 2, "로그인");
echo "\n";
printf(ERROR_MSG, 3, "접속");
echo "\n";

// 문자열을 분리하는 함수
$str_sscanf = "가나다라 50 abcd";
sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);  //잘 사용안함
echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";
echo str_repeat("가", 3);
echo "\n";
// 문자열을 특정 문자열로 분리하는 함수
$str_exp1 = "홍길동,27세,남자,의적,조선";
$arr_exp1 = explode(",", $str_exp1);
// print_r($arr_exp1);

// 배열을 특정 문자열로 합치는 함수
$str_imp1 = implode("123", $arr_exp1);
echo $str_imp1;









?>