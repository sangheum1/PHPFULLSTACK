<?php

// db 연결
$dbc = mysqli_connect("localhost", "root", "root506","employees", 3306);

// var_dump($dbc);

// 쿼리 요청(첫번째 방법)
// $result_query = mysqli_query($dbc, "select emp_no, first_name from employees limit 1;");
// var_dump($result_query);

$i = 5;
// prepared statement (많이 쓰이는 두번째 방법) : 
$stmt = $dbc->stmt_init(); // statement를 세팅
$stmt->prepare("select emp_no, first_name from employees limit ?;"); //db 질의 할 쿼리 작성
$stmt->bind_param("i", $i); // prepare 세팅 ($i 부분은 따로 설정해서 변수로만 넣어야함)
$stmt->execute(); // db에 쿼리 질의 실행
$stmt->bind_result($col1, $col2); // 질의 결과를 각 argument에 저장하기 위한 세팅($col1은 emp_no, $col2는 first_name의 변수)
// 1개 씩 값을 가져오는 방법
$stmt->fetch(); // bind_result에서 세팅한 아규먼트의 값을 저장(한번 실행 될때마다 한 레코드씩 저장)
var_dump($col1, $col2);

// 매치를 루프로 돌려서 모든 질의 결과를 가져오는 방법(key값없이 가져오는방법)
// while( $stmt->fetch())
// {
//     echo "$col1 $col2\n";
// }




// 여러개의 값을 key로 가져오는 방법(루프 돌리기)
// $result = $stmt->get_result(); // 질의 결과를 저장
// while($row=$result->fetch_assoc()) // 저장한것을 연상 배열로 변환해서 가져옴
// {
//     echo $row["first_name"],"\n";
// }



// 쿼리 요청한것을 가져오는 방법
// $result_row = mysqli_fetch_row($result_query);   //배열이 숫자로 가져옴
// var_dump($result_row);
// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);

// 조건문에서 mysqli_fetch_row함수가 가져올 값이 있으면 true(1) 돼서 var_dump 실행, 가져올 값이 없으면 false(0) while루프  종료
// while($temp_row = mysqli_fetch_row($result_query)) {     
//     var_dump($temp_row);
// }

// while($temp_row = mysqli_fetch_assoc($result_query)) {        // key값으로 가져옴
//     var_dump($temp_row["first_name"]);
// }






// DB 연결 종료
mysqli_close($dbc);  // $dbc->close(); 이렇게 종료도 할 수 있음



?>