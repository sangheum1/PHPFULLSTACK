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

$arr_ass_de1 = array("된장찌개" => "파"
                    , "볶음밥" => "양파"
                    , "김치" => "마늘"
                    , "비빔밥" => "참기름"
                );

unset($arr_ass_de1["김치"]);

var_dump($arr_ass_de1);

print_r($arr_ass_de1);




?>