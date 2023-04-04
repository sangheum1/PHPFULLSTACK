<?php

/* 우리가 작성한 db connect 함수(my_db_conn)를 이용해서 아래 데이터 출력
1. 전체 월급의 평균
2. 새로운 사원 젖ㅇ보를 employees 테이블에 등록
3. 2에서 등록한 사원의 이름을 "길동", 성은 "홍"으로 변경해 주세요
4. 2에서 등록한 사원을 삭제해 주세요
*/

include_once("../example/12_02_ex2_fnc_dbfunction.php");
$obj_conn = null; // pdo class => 클래스 설정값을 받기 위해 초기화 시키고 시작

// db connect
my_db_conn( $obj_conn ); // 함수가 어딨는지 확인 ctrl+함수 누르기(함수에서 돌아오려면 alt+화살표 왼쪽)

$sql =
    " SELECT "
    ." avg(salary) avg "
    ." FROM "
    ." salaries ";

// $stmt = $obj_conn->prepare($sql);
// $stmt->execute();
// $result = $stmt->fetchall();
// var_dump($result);

// prepare로 질의 하지 않고 그냥 바로 쿼리 적는 방법(array_prepare을 쓸 필요가 없어서 바로 쿼리작성)
$stmt = $obj_conn->query($sql);
$result = $stmt->fetchall();
var_dump($result);

$obj_conn = null; // db connection 파기



//// employees 테이블 등록
// my_db_conn( $obj_conn );
// $sql =
//     " INSERT INTO employees( "
//     ." emp_no"
//     ." ,birth_date"
//     ." ,first_name"
//     ." ,last_name"
//     ." ,gender"
//     ." ,hire_date"
//     ." ) "
//     ." VALUES( "
//     ." :emp_no "
//     ." ,:birth_date "
//     ." ,:first_name "
//     ." ,:last_name "
//     ." ,:gender "
//     ." ,:hire_date "
//     ." ) ";

// $arr_prepare = 
//     array(
//         ":emp_no"      => "500000"
//         ,":birth_date" => "1997-09-14"
//         ,":first_name" => "Yun"
//         ,":last_name"  => "sangheum"
//         ,":gender"     => "M"
//         ,":hire_date"  => "2000-01-01"
//     );

// $obj_conn = null; // obj_conn값이 존재한 상태에서 null을 시키면 pdo 종료이지만 없는상태면 종료되지 않는다.
// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute( $arr_prepare ); // execute는 성공하면 true로 오고 실패하면 false
// $obj_conn->commit(); // 커밋을 시켜야 데이터 베이스에 저장
// var_dump($result);


// // 테이블 값 변경
// my_db_conn( $obj_conn );
// $sql =
//     " UPDATE "
//     ." employees"
//     ." SET "
//     ." first_name = :first"
//     ." ,last_name = :last"
//     ." WHERE "
//     ." emp_no = :emp_no";

// $arr_prepare = 
//     array(
//         ":first"     => "hong"
//         ,":last"     => "gildong"
//         ,":emp_no"   => 500000
//     );
// $obj_conn = null;
// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute( $arr_prepare ); // execute는 성공하면 true로 오고 실패하면 false
// $obj_conn->commit(); // 커밋을 시켜야 데이터 베이스에 저장
// var_dump($result);



// // 테이블 삭제
// my_db_conn( $obj_conn );
// $sql =
//     " DELETE "
//     ." FROM "
//     ." employees "
//     ." WHERE "
//     ." emp_no = :emp_no";

// $arr_prepare = 
//     array(
//         ":emp_no" => 500000
//     );
// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute( $arr_prepare ); // execute는 성공하면 true로 오고 실패하면 false
// $obj_conn->commit(); // 커밋을 시켜야 데이터 베이스에 저장
// var_dump($result);





$obj_conn = null; // db connection 파기

?>