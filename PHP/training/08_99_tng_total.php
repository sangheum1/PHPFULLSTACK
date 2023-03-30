<?php

// $str = "I am always Hello.";

// // echo mb_substr($str, 0, 12)."Happy.";
// // echo "\n";

// $str = explode("Hello", $str);
// // var_dump($str);
// $str = implode("Happy", $str);
// echo $str;

// // my_str_replace()로 출력
// // 리턴값 : string, $result_str


// function my_str_replace($int) {
//     $str = "I am always Hello.";
//     $str = explode("Hello", $str);
//     $result_str = implode($int, $str);
//     return $result_str;
// }


// printf(my_str_replace("happy"));

// 재사용성 개선
$arr_r1 = "I am always Hello.";
function my_str_replace($param_str, $param_separator, $param_ch) {
    
    $arr_r1 = explode($param_separator, $param_str);
    $result_str = implode($param_ch, $arr_r1);
    return $result_str;
}


my_str_replace($str);








?>