<?php

// $week = array("sun", "mon", "tue", "wed");
// echo $week[0];

// $mon = "mon";
// $sun = "sun";
// $tue = "tue";
// $wed = "wed";
// $food = array($sun, $mon, $tue, $wed);
// echo $food[2];
// $week2 = array($week[0],$week[1],$week[2],$week[3]);


// $week2 = array($week[1],$week[3],$week[0],$week[2]);

// $arr_mult_type = array("aaa", 1, 3, 3.14);
// var_dump($arr_mult_type);

// 연상 배열
$arr_ass = array("key1" => "val1", "key2" => "val2");
// echo $arr_ass["key1"];

// 다차원 배열
// $arr_temp = array(
//     array(1,2,3,4)
//     , array(5,6,7,8)
//     , array(
//         array(9,10,11)
//     )
// );
// echo $arr_temp[2][0][1];

// $arr_temp_3 = $arr_temp[2];

// $arr_temp_3_c = array(
//         array(9, 10, 11)
//     );

// 배열의 원소 삭제

// $arr_week = array("sun", "mon", "delete", "tue", "wed");
// unset($arr_week[2]);
// print_r($arr_week);

// 중복되지 않는 원소를 반환 array_diff()

// $arr_diff_1 = array("b", "a", "c", "d");
// $arr_diff_2 = array("a", "b", "d");
// $arr_diff = array_diff($arr_diff_1, $arr_diff_2);
// print_r($arr_diff);

// 배열의 정렬 : asort(), arsort(), ksort(), krsort()

// asort 오름차순 정렬, arsort 내림차순 정렬, ksort 키를 기준으로 오름차순 정렬, krsort 키를 기준으로 내림차순 정렬
// asort($arr_diff_1);
// print_r($arr_diff_1);

// arsort($arr_diff_1);
// print_r($arr_diff_1);

// $arr_ksort = array("key1" => "val1"
//                 , "key2" => "val2"
//                 , "key4" => "val4"
//                 , "key3" => "val3");

// ksort($arr_ksort);
// print_r($arr_ksort);

// array의 길이(사이즈)를 반환하는 함수 : count()
// echo count($arr_ksort);

// foreach($array as $key => $val){}      =>key랑 value값을 다 출력
// foreach($array as $val){}              =>value값만 출력
$arr1 = array("key1" => "val1"
                , "key2" => "val2"
                , "key4" => "val4"
                , "key3" => "val3");

// foreach($arr1 as $key => $val) {
//     echo $key." : ".$val."\n";
// }

foreach($arr1 as $val) {
    echo $val."\n";
}





?>