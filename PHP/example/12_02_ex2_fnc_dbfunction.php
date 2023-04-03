<?php

// --------------------------------------
// 함수명 : my_db_conn
// 기능   : DB connect
// 파라미터 : PDO &$param_conn
// 리턴   : x
// --------------------------------------
function my_db_conn( &$param_conn )
{
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
    $param_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );
}

// 실질적으로 시작하는 부분
$obj_conn = null; // pdo class => 클래스 설정값을 받기 위해 초기화 시키고 시작

// db connect
my_db_conn( $obj_conn );

// sql
$sql = 
    " SELECT "
    ." * "
    ." FROM "
    ." employees "
    . " LIMIT :limit_start ";

$arr_prepare =
    array(
        ":limit_start" => 5
    );

$stmt = $obj_conn->prepare($sql);
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();

var_dump($result);

$obj_conn = null; // db connection 파기






?>