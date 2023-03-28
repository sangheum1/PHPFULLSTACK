<?php

// $a=5;
// $b=6;
// $sum=$a+$b;
// echo $sum;

// function 변수이름(매개변수 2개), return : 함수에서 값을 리턴시켜줌(안적으면 값이 사라짐)
// function fnc_add($int_a,$int_b) {
//     $sum = $int_a +$int_b;

//     return $sum;
// }

// // fnc_add 함수 호출 (함수를 받을 변수 선언해서 하기)
// $result_add = fnc_add(5,9);
// echo $result_add;

//가변 파라미터 함수
function fnc_args_add() {
    $args = func_get_args();  // 가변 파라미터 습득
    $sum = 0; // 더하기 결과 저장

    // 루프 : 더하기 실행
    foreach ($args as $val) {
        $sum += $val;
    }
    return $sum;
}

echo fnc_args_add(1, 2, 3, 4); // 함수 호출하기 때문에 가장 먼저 실행


// // 재귀함수
// function rcc( $param_a ) {
//     if( $param_a ===1 ) {
//         return 1;
//     }
//     return $param_a * rcc( $param_a - 1);
// }

// echo rcc(3);

?>