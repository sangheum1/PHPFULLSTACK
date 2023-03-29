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

// function star_react($int_1) {
//     for ($i=1; $i<=$int_1; $i++) {
//         star($i);
//     }
// }


// echo star_react(3);




// function star($int) {    
//     for ($i=1; $i<=$int; $i++) {
//         echo "*";
//     }
//     echo "\n";
// }



// function star_react($int_1) {
//     for ($i=1; $i<=$int_1; $i++){
//     star(3);
//     }
// }



// echo star_react(6);

// function star($int) {    
//     for ($i=1; $i<=2*$int-1; $i++) {
//         echo "*";
//     }
//     echo "\n";
// }

// function star_react($int_1) {
//     for ($i=1; $i<=$int_1; $i++) {
//         star($i);
//     }
// }

// function star_blank($int_1) {
//     for ($j=$int_1; $j>0; $j++) {
//         echo " ";
//     }
// }

// echo star_react(4);

// while 언제 멈춰야 할지 알때쓰고 for문은 몇번 반복해야하는지 알때



// foreach ($arr as $key => $val) {
//     echo $key.">".$val."\n";
// }


// $arr = array(5, 10, 7, 3, 1);
// for ($i=0; $i <= 4; $i++) {
//     echo $i." > ".$arr[$i]."\n";
// }


// $temp=$arr[0];
// $arr[0]=$arr[1];
// $arr[1]=$temp;

// print_r($arr);

// for ($i=0; $i < count($arr); $i++) {
//     for ($i=0; $arr[$i] > $arr[$i+=1] && $i < count($arr); $arr[$i++]) {
//     $temp=$arr[$i];
//     $arr[$i]=$arr[$i+=1];
//     $arr[$i+=1]=$temp;
//     }
// }
// $arr = array(5, 10, 7, 3, 1);
// for ($i=0; $i < count($arr)-1; $i++) {
//     $temp=0;
//     if ($arr[$i] > $arr[$i+=1]) {
//         $temp=$arr[$i];
//         $arr[$i]=$arr[$i+=1];
//         $arr[$i+=1]=$temp;
//     }
    
//     }
// var_dump($arr);




// for ($i=0; $arr[$i] > $arr[$i+=1] && $i <= count($arr)-1; $i++) {
//     $temp=$arr[$i];
//     $arr[$i]=$arr[$i+=1];
//     $arr[$i+=1]=$temp;
//     }
// var_dump($arr);


?>