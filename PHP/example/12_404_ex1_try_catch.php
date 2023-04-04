<?php

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

// try-catch 문
// try // 우리가 실행하고 싶은 소스코드 작성
// {
    
// } 
// catch ( Exception $e ) // 에러가 발생 했을때 실행되는 소스코드를 작성
// {
    
// }
// finally // 정상처리 or 에러처리 시에 무조건 실행되는 소스코드를 작성
// {

// }

try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql = " SELECT * FROM  employees where emp_no = 1000000 ";
    $stmt = $obj_conn->query( $sql );
    $result = $stmt->fetchall();

    if( count( $result ) === 0 )
    {
        throw new Exception("E98");  // throw로 강제로 에러를 만들어주는것(getmessage 함수에서 출력됨)
    }
    var_dump($result);
    echo "Try\n";
}
catch( Exception $e )
{
    echo "----에러 발생----\n";
    if( $e->getmessage() === "E99" )
    {
        echo "데이터 0건";
    }
    else
    {
        echo $e->getmessage();
    }
    echo "\n----에러 발생----\n";
    // echo $e->getmessage();
    // echo "\n----에러 발생----\n";
}
finally
{
    echo "Finally\n";
    $obj_conn = null;
}
echo "종료"


?>