<?php
    // get method로 넘겨온 데이터를 담고있는 변수
    var_dump($_GET);

    // 주의사항
    // $_GET은 원본 데이터라서 값이 수정되지 않게 조심 해야합니다.
    // $post_get = $_GET; 이런 방식으로 선언해서 사용
?>