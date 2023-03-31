<?php

// 파일명 : gugudan.txt
// 파일위치 : sam
// 내용은 아래와 같습니다.
// 2단
// 2*1=2
// ..
// 2*9 = 18

$f_gugudan = fopen("../example/sam/gugudan.txt", "a");

// // 문자열을 초기화 할땐 "" 이렇게 초기화 시키고 null값을 넣는건 class 선언하거나 그런 object경우엔 null 선언
$print_gugudan="";
for($dan=2; $dan<=9; $dan++)
{
    $print_gugudan .= $dan."단\n";
    for( $num=1; $num <=9; $num++)
    {
        $result = $dan." * ".$num." = ".$dan*$num."\n";
        $print_gugudan .= $result;     // .=은 기존에 있던 문자열에 그값만 추가해주는것
    }
}
fputs($f_gugudan, $print_gugudan);
fclose($f_gugudan);


// for($j=2; $j<=9; $j++)
// {
    
//     fputs($f_gugu, $j."단 \n".gugu($j));
// }

// function gugu($j) 
// {
//     for($i=1; $i<=9; $i++)
//     {
        
//         $arr_temp[]=array( $j." * ".$i." = ".$j*$i."\n" );
        
//     }
//     $arr_temp = implode(" ", $arr_temp);
    
    
    
// }





/*
김밥
샌드위치
백반
국밥
크림우동
연어초밥
탕수육
돈까스


국밥과 크림우동 이사이 스테이크 추가

*/


// $f_food2 = file("../example/sam/food.txt");
// $print_food = "";
// foreach ($f_food2 as $val)
// {
//     if(trim($val) === "국밥")
//     {
//         $print_food .=$val."스테이크\n";   // .=은 기존에 있던 문자열에 그값만 추가해주는것
//     }
//     else {
//         $print_food .= $val;
//     }
// }
// print $print_food;

// $f_food2 = fopen("../example/sam/gugudan.txt", "w");
// fputs( $f_food2, $print_food);
// fclose($f_foods);

















?>