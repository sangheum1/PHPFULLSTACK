<?php
// db 연결에서 mysqli가 아닌 PDO를 이용하여 db연결하는 방법
$db_host="localhost";
$db_user="root";
$db_password="root506";
$db_name="employees";
$db_charset="utf8mb4";
$db_dns="mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
$db_option=
array(
    PDO::ATTR_EMULATE_PREPARES => false // db의 prepared statement 기능을 사용하도록 설정
    , PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // PDO Exception을 throws하도록 설정
    , PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정
);

// pdo class로 db 연동
$obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );

// // select를 이용한 추출 방법
// $sql = 
//     " SELECT "
//     ." sal.salary "
//     ." ,emp.emp_no "
//     ." ,emp.birth_date "
//     ." FROM "
//     ." employees emp "
//     ." INNER JOIN salaries sal "
//     ."      on emp.emp_no = sal.emp_no "
//     ." WHERE "
//     ." ( "
//     ."      emp.emp_no = :emp_no1 "  // ?랑 :emp_no 똑같은 의미인데 :을 더많이 사용
//     ."      or emp.emp_no = :emp_no2 "
//     ." ) "
//     ." AND sal.to_date >= now() "; // 구조적 문제때문에 쿼리끝나고 ; 안적음

// $arr_prepare = 
//     array(
//         ":emp_no1" => 10001
//         , ":emp_no2" => 10002
//     );

// $stmt = $obj_conn->prepare( $sql ); // prepare statement를 생성
// $stmt->execute( $arr_prepare ); // 쿼리 실행( :을 쓴 변수들의 값을 함수안에 넣어줘야함 )
// $result = $stmt->fetchAll(); // 쿼리 결과를 fetch
// var_dump( $result );

// foreach ( $result as $val )
// {
//     echo $val["salary"], "\n";
// }




// insert를 이용한 추출 방법
$sql =
    " INSERT INTO departments( "
    ." dept_no"
    ." ,dept_name"
    ." ) "
    ." VALUES( "
    ." :dept_no "
    ." ,:dept_name "
    ." ) ";

$arr_prepare = 
    array(
        ":dept_no" => "d011"
        ,":dept_name" => "PHP풀스택"
    );

$stmt = $obj_conn->prepare( $sql );
$result = $stmt->execute( $arr_prepare ); // execute는 성공하면 true로 오고 실패하면 false
$obj_conn->commit(); // 커밋을 시켜야 데이터 베이스에 저장
var_dump($result);








// db 종료
$obj_conn = null;





?>