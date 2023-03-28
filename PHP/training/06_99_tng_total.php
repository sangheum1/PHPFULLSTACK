<?php

// 배열의 길이를 반환하는 my_len() 함수를 작성하세요 array(1, 2, 3, 4, 5) 일때 5가 되는것


// function my_len($arr_base) {
    
//     $sum=0;
//     foreach ($arr_base as $value) {
        
//         $sum+=1;
        

//     }
//     return $sum;

// }


// $arr_base = array(1, 2, 3, 4, 5);
// echo my_len($arr_base);

// function my_len(&$base) {
    
//     $sum=0;
//     foreach ($base as $value) {
        
//         $sum+=1;
        

//     }
//     return $sum;
//     $base=$sum;

// }


// $arr_base = array(1, 2, 3, 4, 5);
// my_len($arr_base);
// echo $arr_base;

// 별 찍기를 함수로 만들어 봅시다.
// $num=5;
// for ($j=1; $j<=$num; $j++) {
//     for ($i=1; $i<=$j; $i++) {
//         echo "*";
//     }
//     echo "\n";
// }

// function star($num) {
//     for ($j=1; $j<=$num; $j++) {
//         for ($i=1; $i<=$j; $i++) {
//             echo "*";
//         }
//         echo "\n";
//     }
// }
// $num=3;
// echo star($num);


// function star($int) {    
//     for ($i=1; $i<=$int; $i++) {
//         echo "*";
//     }
//     echo "\n";
// }
// // star(1);
// // star(2);
// // star(3);
// // star(4);
// // star(5);

// function star_react($int_1) {
//     for ($i=1; $i<=$int_1; $i++) {
//         star($i);
//     }
// }


// echo star_react(3);




function star($int) {    
    for ($i=1; $i<=$int; $i++) {
        echo "*";
    }
    echo "\n";
}



function star_react($int_1) {
    for ($i=1; $i<=$int_1; $i++)
    star(3);

}



echo star_react(4);
// ***
// ***
// ***









?>