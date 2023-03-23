<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="p1_ans">
        <input type="number" name="p1_ans" name="p1_ans">
        <input type="submit">
    </form>
</body>
</html>


<?php
// 범위내의 값을 무작위 생성
// echo rand(0,10);

//가위 바위 보 만들기

$num1=rand(0,2);
$num2=rand(0,2);

if($num1 == 0) {
    $scr1="가위";
}
else if ($num1 == 1) {
    $scr1="바위";
}
else {
    $scr1="보";
}

if($num2 == 0) {
    $scr2="가위";
}
else if ($num2 == 1) {
    $scr2="바위";
}
else {
    $scr2="보";
}



$line="\n";
$blank=" ";
echo "넘버1 : ".$scr1.$blank."넘버2 : ".$scr2.$line;
    
if( ($num1 == 0 && $num2 == 0) || ($num1 == 1 && $num2 == 1) || ($num1 == 2 && $num2 == 2) ) {
    echo "무승부 입니다";
}

else if( ($num1 == 0 && $num2 == 2) || ($num1 == 1 && $num2 == 0) || ($num1 == 2 && $num2 == 1) ) {
    echo "넘버1 승리";
}
else{
    echo "넘버2 승리";
}



// else에다 if 문 넣는 방법
?>