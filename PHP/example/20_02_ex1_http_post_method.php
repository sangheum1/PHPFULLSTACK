<?php

// 1. POST Method (body 부분?)
//      - request 할 때의 데이터를 외부에서 볼 수가 없다
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form tag로 request -->
    <form method="post" action="20_02_ex2_httppost.php">
        <input type="text" name="p_test1">
        <br>
        <input type="text" name="p_test2">
        <br>
        <input type="hidden" name="p_hidden1" value="aaa">   <!-- 개발자가 화면에 안나오도록 만들고 값을 받고 싶을때 hidden 속성 사용-->
        <br>
        <button type="submit">submit</button>

    </form>
</body>
</html>