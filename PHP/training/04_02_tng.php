<?php



// 반복문을 이용하여 아래와 같이 출력해 주세요
// 개수는 내가 입력한 개수만큼
// *
// **
// ***
// ****
// *****

// $i="*";

// for ($i=2; $i <= 9; $i++) { 
//     echo $i+="*";
    
// }



// echo "\n".$j=$j.$i;
// echo "\n".$j=$j.$i;
// echo "\n".$j=$j.$i;

// for($i="*" && $j="*"; )
// $i="*";

// for ($i="*"; $i == "*"; $j=$j.$i) {
//     echo $j;
// }

// $i="*";
// $j="*";
// $m=40;
// echo $i="*";
// for ($k=1; $k<$m; $k++) {
    
//     echo "\n".$j=$j.$i;
// }

// $num=5;
// for ($j=1; $j<=$num; $j++) {
//     for ($i=1; $i<=$j; $i++) {
//         echo "*";
//     }
//     echo "\n";
// }

// $num=4;
// for ($i=1; $i<=$num; $i++) {
//     echo "*";
// }

// $num=5;
// for ($j=1; $j<=$num; $j++) {
//     for ($i=1; $i<=$j; $i++) {
//         echo "*";
//     }
//     echo "\n";
// }

$num=4;
for($j=$num; $j>0; $j--){
    for($k=$j; $k<=$num; $k++){
        echo " ";
    }
    
    for ($i=$j; $i>0; $i--) {
        echo "*";
    }
    echo "\n";
}

// $num=4;

// for($j=$num; $j>0; $j--){
//     for($j=$num; $j>0; $j--) {
        
        
//         for ($i=$j; $i>0; $i--) {
//             echo "*";
//         }
//         echo "\n";
//     }
// }




?>