<?php

// // 두 매개변수의 차를 구하는 함수를 구현
// function fnc_subt($int_a,$int_b) {
//     $subtract=$int_a-$int_b;
//     return $subtract;
// }

// $result_subt=fnc_subt(7,5);
// echo $result_subt."\n";

// // 두 매개변수를 나눈 함수를 구현
// function fnc_div($int_a,$int_b) {
//     $divide=$int_a/$int_b;
//     return $divide;
// }

// $result_div=fnc_div(7,2);
// echo $result_div."\n";

// // 두 매개 변수를 곱하는 함수를 구현
// function fnc_mul($int_a,$int_b) {
//     $multiply=$int_a*$int_b;
//     return $multiply;
// }
// $result_mul=fnc_mul(7,5);
// echo $result_mul."\n";


// 빼기, 곱하기, 나누기를 가변 파라미터 함수로 구현해주세요

// function fnc_args_subt() {
//     $args = func_get_args();
//     $subt = $args[0];
//     unset($args[0]);

    
//     foreach ($args as $val) {
//         $subt -= $val;
//     }
//     return $subt;
// }
// echo fnc_args_subt(10,4,5);

function fnc_args_subt() {
    $args = func_get_args();

    
    foreach ($args as $val) {
        if($val===$args[0]) {
            $subt=$val;
        }
        else {
            $subt-=$val;
        }
    }
    return $subt;
}
echo fnc_args_subt(10,3,5)."\n";

// function fnc_args_multi() {
//     $args = func_get_args();

    
//     foreach ($args as $val) {
//         if($val===$args[0]) {
//             $multi=$val;
//         }
//         else {
//             $multi*=$val;
//         }
//     }
//     return $multi;
// }
// echo fnc_args_multi(10,4,3)."\n";

// function fnc_args_div() {
//     $args = func_get_args();

    
//     foreach ($args as $val) {
//         if($val===$args[0]) {
//             $div=$val;
//         }
//         else {
//             $div/=$val;
//         }
//     }
//     return $div;
// }
// echo fnc_args_div(10,2,5)."\n";

function fnc_args_minus() {
    $result_args = func_get_arg();
    $result_minus = null;
    foreach ($result_args as $val) {
        if(is_null($result_minus)) {
            $result_minus = $val;
        }
        else {
            $result_minus -= $val;
        }
    }
    return $result_minus;
}

?>