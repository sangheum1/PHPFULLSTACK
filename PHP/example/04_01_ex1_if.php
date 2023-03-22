<?php

    // $num = 6;

    // if( $num === 0 ) {
    //     echo "0입니다";
    // }
    // else if ($num === 1) {
    //     echo "1입니다";
    // }
    // else if ($num === 2) {
    //     echo "2입니다";
    // }
    // else if ($num === 3) {
    //     echo "3입니다";
    // }
    // else {
    //     echo "모르겠다";
    // }


// 성적
// 범위 : 100점 A+
//         90~99 a
//         80_90 b
//         70~80 c
//         60~70 d
//         60미만 f

    // $num = 50;
    
    // if( $num == 100) {
    //     echo "당신의 점수는 ",$num,"점 입니다. <A+>";
    // }
    // else if($num<100 && $num>=90) {
    //     echo "당신의 점수는 ",$num,"점 입니다. <A>";
    // }
    // else if($num<90 && $num>=80) {
    //     echo "당신의 점수는 ",$num,"점 입니다. <B>";
    // }
    // else if($num<80 && $num>=70) {
    //     echo "당신의 점수는 ",$num,"점 입니다. <C>";
    // }
    // else if($num<70 && $num>60) {
    //     echo "당신의 점수는 ",$num,"점 입니다. <D>";
    // }
    // else{
    //     echo "당신의 점수는 ",$num,"점 입니다. <F>";
    // }


    // $num = 110;
    
    // if($num == 100) {
    //     $scr = "<A+>";
    // }
    // else if($num<100 && $num>=90) {
    //     $scr = "<A>";
    // }
    // else if($num<90 && $num>=80) {
    //     $scr = "<B>";
    // }
    // else if($num<80 && $num>=70) {
    //     $scr = "<C>";
    // }
    // else if($num<70 && $num>=60) {
    //     $scr = "<D>";
    // }
    // else if($num<60 && $num>=0) {
    //     $scr = "<F>";
    // }
    // else {
    //     echo "잘못된 값을 입력했습니다.";
    // }


        $num = 110;
    

    if($num<=100 && $num>=0) {
        if( $num == 100) {
            echo "당신의 점수는 ",$num,"점 입니다. <A+>";
        }
        else if($num<100 && $num>=90) {
            echo "당신의 점수는 ",$num,"점 입니다. <A>";
        }
        else if($num<90 && $num>=80) {
            echo "당신의 점수는 ",$num,"점 입니다. <B>";
        }
        else if($num<80 && $num>=70) {
            echo "당신의 점수는 ",$num,"점 입니다. <C>";
        }
        else if($num<70 && $num>60) {
            echo "당신의 점수는 ",$num,"점 입니다. <D>";
        }
        else{
            echo "당신의 점수는 ",$num,"점 입니다. <F>";
        }
    }
    else {
        echo "잘못된 값을 입력했습니다";
    }



?>