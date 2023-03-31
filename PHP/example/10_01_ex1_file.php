<?php

// 파일을 여는 방법 : fopen(파일위치, 파일 여는 방식) (1)
// $f_food = fopen("./sam/food.txt","r"); // r : 읽기전용
// $f_food = fopen("./sam/food.txt","w"); // w : 쓰기전용(포인터가 파일 시작부분)


// var_dump($f_food);

// 파일을 한줄씩 읽어오는 방법 : fgets( open한 파일 )
// for($i=0; $i<=5; $i++)
// {
//     print fgets($f_food);
// }

// 불러올 자료 있으면 true(1), 불러올 자료 없으면 false(0)
// while(!feof($f_food)) {
//     print fgets($f_food);
// }

// while( $line = fgets($f_food))
// {
//     print $line;
// }

// 파일을 여는 방법 : fopen(파일위치, 파일 여는 방식) (2)
$f_food = fopen("./sam/food.txt","a"); // a : 쓰기전용(포인터가 파일 끝부분)
// 파일에 내용 추가 : fputs(open한 파일, 추가할 내용)
fputs($f_food, "\n돈까스");
fputs($f_food, "\n돈까스2");

// 파일을 닫는 방법 : fclose( open한 파일 )
fclose($f_food);




?>