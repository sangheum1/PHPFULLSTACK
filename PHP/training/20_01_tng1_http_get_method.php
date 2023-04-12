<?php

    // 1. get method로 사용자가 입력한 데이터를 http request를 합니다.
    // 2. 입력한 데이터의 상세 내역은 아래와 같습니다.
    //  2-1. key : id, pw, name, birth_date
    // echo를 이용하여 각각의 데이터를 출력


?>


<!-- form tag 이용 하는 방법 (url은 호스트창에서 &key값=value값 적으면 됨) -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get method</title>
</head>
<body>
    <form method="get" action="">
        <input type="text" name="id">                 <!-- name이 키값 -->
        <br>
        <input type="password" name="pw">
        <br>
        <input type="text" name="name">
        <br>
        <input type="date" name="birth_date">
        <br>
        <button type="submit">저장</button>
    </form>
    <br>
    <br>
    <br>
    <?php
    $arr_get = $_GET;
    if( count($arr_get) != 0)              // foreach문으로도 가능함
    {
    echo $arr_get["id"]."<br>\n";
    echo $arr_get["pw"]."<br>\n";
    echo $arr_get["name"]."<br>\n";
    echo $arr_get["birth_date"]."<br>\n";
    }
    ?>
    
</body>
</html>
