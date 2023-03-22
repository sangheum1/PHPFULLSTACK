<?php

    // $val = 15;

    // switch ($val) {
    //     case 0:
    //         echo "숫자 0입니다";
    //         break;
    //     case 20:
    //         echo "숫자 1입니다";
    //         break;
        
    //     default:
    //         echo "디폴트입니다";
    //         break;
    // }

    $num =755;

    switch ($num) {
        case $num>100 || $num<0:
            echo "잘못된 값을 입력하셨습니다";
            break;
        default:
            switch ($num) {
                case $num == 100:
                    echo "당신의 점수는 $num 점 입니다 <A+>";
                    break;
                case $num >= 90:
                    echo "당신의 점수는 $num 점 입니다 <A>";
                    break;
                case $num >= 80:
                    echo "당신의 점수는 $num 점 입니다 <B>";
                    break;
                case $num >= 70:
                    echo "당신의 점수는 $num 점 입니다 <C>";
                    break;
                case $num >= 60:
                    echo "당신의 점수는 $num 점 입니다 <D>";
                    break;
                default:
                    echo "당신의 점수는 $num 점 입니다 <F>";
                    break;
            }
    }

?>