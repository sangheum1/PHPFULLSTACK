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

    // $num =100;
    // $text_1 = "당신의 점수는 ";
    // $text_2 = "점 입니다 ";

    // switch ($num) {
    //     case $num>100 || $num<0:
    //         echo "잘못된 값을 입력하셨습니다";
    //         break;
    //     default:
    //         switch ($num) {
    //             case $num == 100:
    //                 echo $text_1.$num.$text_2."<A+>";
    //                 break;
    //             case $num >= 90:
    //                 echo $text_1.$num.$text_2."<A>";
    //                 break;
    //             case $num >= 80:
    //                 echo $text_1.$num.$text_2."<B>";
    //                 break;
    //             case $num >= 70:
    //                 echo $text_1.$num.$text_2."<C>";
    //                 break;
    //             case $num >= 60:
    //                 echo $text_1.$num.$text_2."<D>";
    //                 break;
    //             default:
    //                 echo $text_1.$num.$text_2."<F>";
    //                 break;
    //         }
    // }

    $num =90;
    $text_1 = "당신의 점수는 ";
    $text_2 = "점 입니다 ";

    switch ($num) {
        case 100 || 90 || 80 || 70 || 60: {
            switch ($num) {
                case 100:
                    echo $text_1.$num.$text_2."<A+>";
                    break;
                case 90:
                    echo $text_1.$num.$text_2."<A>";
                    break;
                case 80:
                    echo $text_1.$num.$text_2."<B>";
                    break;
                case 70:
                    echo $text_1.$num.$text_2."<C>";
                    break;
                default:
                    echo $text_1.$num.$text_2."<D>";
                    break;
            }
        }
        default:
        echo "잘못된 값을 입력하셨습니다";
        break;
    }

?>