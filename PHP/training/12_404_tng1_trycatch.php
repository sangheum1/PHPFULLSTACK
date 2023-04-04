<?php

// 아래 쿼리를 이용해서 db접속 data획득 후 출력해 주세요
// try catch로 에러 처리 해주세요
// 에러가 날 경우 해당 에러 메시지를 출력해주세요
// 정상 종료일 경우 정상종료라고 출력해주세요
// $sql1 = " SELECT * FROM department ";
// $sql2 = " SELECT * FROM dept_manager ";

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


try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql1 = " SELECT * FROM department ";
    $sql2 = " SELECT * FROM dept_manager ";
    
    
    $stmt_2 = $obj_conn->query( $sql2 );
    $result_2 = $stmt_2->fetchall();
    var_dump($result_2);
    echo "정상 종료";

    $stmt_1 = $obj_conn->query( $sql1 );
    $result_1 = $stmt_1->fetchall();
    


    
    
}
catch( Exception $e )
{
    echo $e->getmessage();
}
finally
{
    // echo "정상 종료";
    $obj_conn = null;
}
echo "종료"



?>