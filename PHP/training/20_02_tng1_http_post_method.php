<?php
    // 1. post method로 사용자가 입력한 데이터를 http request를 합니다.
    // 2. 입력한 데이터의 상세 내역은 아래와 같습니다.
    //  2-1. key : id, pw, name, birth_date
    // 3. 유저가 입력하지 않은 데이터도 함께 전송
    //  3-1. key: h_page, val: h1
    // echo를 이용하여 각각의 데이터를 출력
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post method</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="id">
        <br>
        <input type="password" name="pw">
        <br>
        <input type="text" name="name">
        <br>
        <input type="date" name="birth_date">
        <br>
        <input type="hidden" name="h_page" value="h1">
        <br>
        <button type="submit">전송하기</button>
    </form>

    <?php
        $arr_post = $_POST;
        foreach($arr_post as $key => $value )
        {
            echo $key." : ".$value."<br>";
        }
    ?>
</body>
</html>