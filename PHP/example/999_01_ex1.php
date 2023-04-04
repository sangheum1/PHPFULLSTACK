<?php

// while + if 조합된것
// $i = 0;
// while( $i<=4 )
// {
//     echo $i;
//     $i++;
// }

// $arr_ass=array("비","바","부");
// // $arr_ass = array( "a" => 1 );
// var_dump($arr_ass);

// 1~100 숫자 중에 짝수의 합을 구해주세요
// $num=0;
// for($i=2; $i <= 100; $i+=2) 
// {
//     $num+=$i;
// }
// echo $num;

// $num=0;
// for($i=1; $i * 2 <= 100; $i++) 
// {
//     $num+=$i * 2;
// }
// echo $num;

// $num = 0;
// $i = 1;
// while( $i <= 100 ) {

//     if( $i%2 === 0 )
//     {
//         $num+=$i;
//     }
//     $i++;
// }
// echo $num;

// $arr_test = 
// array(
//     1
//     ,2
//     ,array(
//         "info_a" => 3
//         , "info_b" => 4
//         , "info_arr" => 
//                 array(
//                     "f_1" => 5
//                     , "f_2" => 7
//                 )
//     )
// );

// // echo $arr_test["info"]["info_a"]."\n";
// // echo $arr_test["info"]["info_arr"]["f_2"];

// // echo $arr_test[2]["info_arr"]["f_1"];


// // function fnc_sum($param_a, $param_b)
// // {
// //     $sum=$param_a + $param_b;
// //     return $sum;
// // }
// // echo fnc_sum(3,5);

// function fnc_sum2( ...$param_numbers )
// {
//     // $sum = 0;
    
//     return array_sum($param_numbers);
// }
// echo fnc_sum2(3,4,6,7);




// function fnc_global()
// {
//     global $global_i;
//     $global_i = 0;
// }
// $global_i = 5;
// echo $global_i;


// static은 처음은 그값이 설정값 이지만 또 호출되면 최종적으로 연산된 값으로 존재
// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }

// fnc_static();
// fnc_static();
// fnc_static();


// function fnc_reference( &$param_str )
// {
//     $param_str = "fnc_reference";
// }
// $str = "aaa";
// fnc_reference( $str );
// echo $str;

// for( $i=2; $i <= 9; $i++)
// {
//     echo "$i 단\n";
//     for( $x = 1; $x <= 9; $x++ )
//     {
//         echo "$i x $x = ", $i*$x, "\n";
//     }
//     echo "\n";
// }

// $num = 4;
// for( $j=1; $j <= $num; $j++)
// {
//     for($i=1; $i<=$j; $i++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }


function star_react($num)
{
    for( $j=1; $j <= $num; $j++)
    {
        star($j);
    }
}
function star($j)
{
    for($i=1; $i<=$j; $i++)
    {
        echo "*";
    }
    echo "\n";
}
star_react(3);





// function star($j)
// {
//     for($i=1; $i<=$j; $i++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }
// star(1);
// star(2);
// star(3);
// star(4);



?>