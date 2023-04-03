<?php

// db 설정값 불러오는 방법
include_once("12_02_ex2_fnc_dbfunction.php");  // once는 function파일 한번 가져온후 멈춤



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