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
$url = "https://www.google.com/search?q=php+%EC%83%81%EC%88%98+%EC%82%AC%EC%9A%A9&ei=CvsjZJHKD8So2roPuPGCkAM&ved=0ahUKEwiR98Sq4ID-AhVElFYBHbi4ADIQ4dUDCA8&uact=5&oq=php+%EC%83%81%EC%88%98+%EC%82%AC%EC%9A%A9&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIFCAAQgAQ6CggAEEcQ1gQQsAM6BQghEKABOgQIABAeOgYIABAeEA86BggAEAgQHjoICAAQCBAeEA9KBAhBGABQ6gdYgx9gtiBoAnABeACAAXuIAbEHkgEDOS4xmAEAoAEByAEKwAEB&sclient=gws-wiz-serp";
$arr_url = parse_url($url);
var_dump($arr_url);

//url에 저장된 함수를 나눠서 저장해주는데 그것을 저장해주는 곳을 변수로 나타내야함
parse_str($arr_url["query"], $arr_parse);
var_dump($arr_parse);







?>