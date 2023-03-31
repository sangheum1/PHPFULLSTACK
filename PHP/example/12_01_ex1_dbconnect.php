<?php

// db 연결
$dbc = mysqli_connect("localhost", "root", "root506","employees", 3306);

// var_dump($dbc);

// 쿼리 요청
$result_query = mysqli_query($dbc, "select emp_no, first_name from employees limit 1;");
// var_dump($result_query);

// 쿼리 요청한것을 가져오는 방법
// $result_row = mysqli_fetch_row($result_query);   //배열이 숫자로 가져옴
// var_dump($result_row);
// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);

// 조건문에서 mysqli_fetch_row함수가 가져올 값이 있으면 true(1) 돼서 var_dump 실행, 가져올 값이 없으면 false(0) while루프  종료
// while($temp_row = mysqli_fetch_row($result_query)) {     
//     var_dump($temp_row);
// }
while($temp_row = mysqli_fetch_assoc($result_query)) {        // key값으로 가져옴
    var_dump($temp_row["first_name"]);
}



mysqli_close($dbc);



?>