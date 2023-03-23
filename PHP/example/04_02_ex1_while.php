<?php
    // 1.while문
    // while(조건) {
    //     //반복하고 싶은 처리
    // }

    // $i=0;
    // while($i < 10) {
    //     echo $i++;
    // }

    // $i=0;
    // $j=1;
    // $line="\n";
    // while($i < 18 && $j<10) {
    //     $k=$i+=2;
    //     echo "2*".$j."=".$k.$line;
    //     $j++;
    // }

    // $i=0;
    // while($i < 18) {
    //     echo $i+=2;
    // }


    
    // $i=0;
    // $j=2;
    
    // $line="\n";
    // while($j<10) {
    //     echo $j."단\n";
    //     while($i<9) {
    //         $i++;
    //         echo $j."*".$i."=".$j*$i.$line;
    //     }
    //     $i=0;
    //     $j++;
        

    // }

    // do{
    //     반복할 처리
    // }
    // while( 조건 );

    // $i=0;
    // do{
    //     echo $i. "do while";
    // }
    // while($i === 1);

    // while($i === 1) {
    //     echo $i."while";
    // }

    // for문
    $line="\n";
    for ($i=2; $i <= 9; $i++) { 
        echo $i. "단\n";
        for ($j=1; $j <= 9; $j++) {
            echo $i."*".$j."=".$i*$j.$line;
        }
        $j=1;
    }

?>