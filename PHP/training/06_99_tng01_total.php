<?php
// 버블 배열로 array 바꾸기
$arr = array(5, 10, 7, 3, 1);
for($j=0; $j < count($arr); $j++){
    for ($i=0; $i < count($arr)-1; $i++) {
        
        if ($arr[$i] > $arr[$i+1]) {
            $temp=$arr[$i];
            $arr[$i]=$arr[$i+1];
            $arr[$i+1]=$temp;
        }
        
        }
//    count($arr)--;    >> 10이 맨뒤로 가면 그다음엔 4번만 돌려서 7 그다음엔 3번만 돌려서 5 만들기 위해(안하면 계속 10이 위치한곳까지 루프를 돌아야해서)
}


// $temp=$arr[0];

// for($i=0; $i < count($arr); $i++){
    
//     if ($temp < $arr[$i] ) {
//         $temp=$arr[$i];                           // for 구문이 끝나도 temp값은 존재함
//     }
// }


// function my_max($arr) {
//     $temp=$arr[0];
//     for($i=1; $i < count($arr); $i++){
    
//         if ($temp < $arr[$i] ) {
//             $temp=$arr[$i];
//         }
//     }
//     return $temp;
// } 
// echo my_max($arr);

// function my_min($arr) {
//     $temp=$arr[0];
//     for($i=1; $i < count($arr); $i++){
    
//         if ($temp > $arr[$i] ) {
//             $temp=$arr[$i];
//         }
//     }
//     return $temp;
// } 
// echo my_min($arr);

// $arr = array(5, 10, 7, 3, 1);
// $temp=$arr[0];
// foreach ($arr as $val) {
    
//     if ($temp > $val ) {
//         $temp=$val;
//     }
// }
// echo $temp;

?>