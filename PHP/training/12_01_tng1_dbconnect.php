<?php

// 사번이 10005 이하 사원의 사번, 이름(성 이름), 성별, 생일 데이터가 0건이면 데이터가 0건입니다. 출력해주세요
$dbc = mysqli_connect("localhost", "root", "root506","employees", 3306);
$result_query = mysqli_query($dbc, "SELECT emp_no, CONCAT(first_name,' ' , last_name) fullname , gender, birth_date FROM employees WHERE emp_no <=10001;");
// while($temp_row = mysqli_fetch_assoc($result_query)) {      
//     // var_dump($temp_row);
//     echo $temp_row = "\n".implode("\n", $temp_row)."\n";
// }

// if (!($temp_row = mysqli_fetch_assoc($result_query)))
// {
//     echo "데이터가 0건 입니다";
// }
// else
// {
//     while($temp_row = mysqli_fetch_assoc($result_query)) {      
//         // var_dump($temp_row);
//         echo $temp_row = "\n".implode("\n", $temp_row)."\n";
//     }
// }

// mysqli_num_rows() 를 이용하여  레코드 수를 체크 하는 방법
// if( mysqli_num_rows( $result_query )=== 0)
// {
//     echo "데이터가 0건 입니다";
// }
// else
// {
//     while( $temp_row = mysqli_fetch_assoc($result_query) )
//     {
//         echo implode( " ", $temp_row), "\n";
//     }
// }




// 플래그를 이용하는 방법
$flg_cnt = false;
while( $temp_row = mysqli_fetch_assoc($result_query) )
{
    echo implode( " ", $temp_row), "\n";
    $flg_cnt = true;
}
if (!$flg_cnt)
{
    echo "데이터가 0건 입니다";
}




mysqli_close($dbc);



?>