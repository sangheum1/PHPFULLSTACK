<?php
function db_conn()
{
    $host = "localhost";
    $user = "root";
    $pass = "root506";
    $charset = "utf8mb4";
    $db_name = "boarder";
    $dns = "mysql:host=".$host.";dbname=".$db_name.";charset=".$charset;
    $pdo_option =
        array(
            PDO::ATTR_EMULATE_PREPARES      => false
            ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
            ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
        );
    
    $pdo = new PDO($dns, $user, $pass, $pdo_option);
    $stmt = $pdo->prepare( " select * from board_info " );
    $stmt->execute();
    $result = $stmt->fetchall();
    var_dump($result);
}

// db_conn();
var_dump($_SERVER);



?>