<?php

// $food = array("탕수육","짬뽕","짜장면","군만두","중화비빔밥");
// echo $food[mt_rand(0,4)];

// $mon = "mon";
// $sun = "sun";
// $tue = "tue";
// $wed = "wed";
// $food = array($sun, $mon, $tue, $wed);
// echo $food[2];

// 배열길이=4
// $arr_ass = array(5>"밀가루", "볶음밥"=>"쌀", "탕수육"=>"고기", "붕어빵"=>"팥");

// $arr_ass_de1 = array("된장찌개" => "파"
//                     , "볶음밥" => "양파"
//                     , "김치" => "마늘"
//                     , "비빔밥" => "참기름"
//                 );

// unset($arr_ass_de1["김치"]);

// var_dump($arr_ass_de1);

// print_r($arr_ass_de1);

$arr_ass = array("짬뽕"=>"밀가루"
                , "볶음밥"=>"쌀"
                , "삭제"=>"값값"
                , "탕수육"=>"고기"
                , "붕어빵"=>"팥");

// foreach문을 이용하여 키가 삭제인 요소를 제거해 주세요
// foreach($arr_ass as $key => $val){
//     if( $key === "짬뽕" ) {
//         echo $key." : ".$val;
//     }
//     else if ($key === "볶음밥") {
//         echo $key." : ".$val;
//     }
//     else if ($key === "삭제") {
//         unset($arr_ass[$key]);
//     }
//     else if ($key === "탕수육") {
//         echo $key." : ".$val;
//     }
//     else {
//         echo $key." : ".$val;
//     }
// }
// var_dump($arr_ass);

foreach($arr_ass as $key => $val){
    if( $key === "삭제" ) {
        unset($arr_ass[$key]);
    }
    else {
        echo $key." : ".$val."\n";
    }
}

var_dump($arr_ass);


?>