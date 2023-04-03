<?php

// 아래 쿼리로 결과를 출력하는 프로그램 만들어 주세요
// select emp_no, salary from salaries where to_date = ? and salary >= ? order by salary desc limit ?;
/*
to_date : 9999-01-01
salary : 50000
limit 5
*/
$date=99990101;
$sal=50000;
$lmt=5;

$dbc = mysqli_connect("localhost", "root", "root506","employees", 3306);
$stmt = $dbc->stmt_init(); // mysqli_stmt_prepare을 사용하기 위해 객체를 초기화하고 리턴
$quali="select emp_no, salary from salaries
        where to_date = date(?) and salary >= ? 
        order by salary desc limit ?";
$stmt->prepare($quali);
$stmt->bind_param("iii", $date, $sal, $lmt);
$stmt->execute();
$result = $stmt->get_result();
while($row=$result->fetch_assoc())
{
    echo $row["emp_no"],"\n";
    // print_r($row);
}
mysqli_close($dbc);

?>