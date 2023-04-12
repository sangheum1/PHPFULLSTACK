<?php

?>

<!-- 1. GET Method
        1-1. GET Method로 데이터를 넘겨주는 방법 1
        - Query String에 키와 값을 세팅 해준다.(끝에 &key1=10 붙여서 2개 보낼수 있음) -->

<!-- board_no=1이 쿼리 스트링 부분(넘겨주는 부분),
http 프로토콜, localhost는 도메인, mini~update.php는 패스
http://localhost/mini_board/src/board_update.php?board_no=1
http://localhost/mini_board/src/board_update.php?board_no=1&key1=10
-->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1-2. form으로  get 방식 데이터를 넘겨주는 방법 1 -->
    <form method="get" action="20_01_ex2_httpget.php">
        <input type="text" name="test1" value="testValue1">
        <button type="submit">submit</button>
    </form>
    <!-- http://localhost/20_01_ex2_httpget.php?test1=testValue1  form실행하면 주소에 test1=testvalue1 입력 -->
    <br>
    <br>
    <a href="http://localhost/20_01_ex2_httpget.php?aaa=1">a태그</a>

</body>
</html>
