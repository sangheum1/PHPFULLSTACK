<?php

// function fnc_add() {
//     $int_a = $int_a +10;

//     return $int_a;
// }

// echo fnc_add();

// 함수 밖에서 선언한 변수를 함수 안에서도 쓰려면 global 변수 선언(함수 안에서 변경된 값은 함수 밖에서도 적용)

// function fnc_add() {
//     global $global_int_a;
//     $global_int_a = $global_int_a +10;
//     return $global_int_a;
// }

// $global_int_a = 5;
// echo fnc_add();


// 다른 php 파일에서 전역변수 설정한것 가져오는것
// include ("06_01_ex2_")

// 정적 변수 : 처음은 1이지만 다음은 그 전 호출을 기억함
// function fnc_add_1() {
//     static $i = 1;
//     echo $i."\n";
//     $i++;
// }

// for($i=0; $i < 3; $i++) {
//     fnc_add_1();
// }

// echo $i;

// call by value
// function fnc_add($int_a,$int_b) {
//     $int_a = 3;
//     $int_b = 4;
//     echo $int_a.":";
//     echo $int_b.":";
// }

// $int_a = 1;
// $int_b = 2;
// fnc_add(5,6);

// echo $int_a." ".$int_b;

// call by reference
function fnc_val(&$a,&$b) {
    $a = 3;
    $b = 4;
}

$int_a = 1;
$int_b = 2;
fnc_val($int_a,$int_b);

echo $int_a." ".$int_b;





?>