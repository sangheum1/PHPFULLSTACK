<?php

// while + if 조합된것
// $i = 0;
// while( $i<=4 )
// {
//     echo $i;
//     $i++;
// }

// $arr_ass=array("비","바","부");
// // $arr_ass = array( "a" => 1 );
// var_dump($arr_ass);

// 1~100 숫자 중에 짝수의 합을 구해주세요
// $num=0;
// for($i=2; $i <= 100; $i+=2) 
// {
//     $num+=$i;
// }
// echo $num;

// $num=0;
// for($i=1; $i * 2 <= 100; $i++) 
// {
//     $num+=$i * 2;
// }
// echo $num;

// $num = 0;
// $i = 1;
// while( $i <= 100 ) {

//     if( $i%2 === 0 )
//     {
//         $num+=$i;
//     }
//     $i++;
// }
// echo $num;

// $arr_test = 
// array(
//     1
//     ,2
//     ,array(
//         "info_a" => 3
//         , "info_b" => 4
//         , "info_arr" => 
//                 array(
//                     "f_1" => 5
//                     , "f_2" => 7
//                 )
//     )
// );

// // echo $arr_test["info"]["info_a"]."\n";
// // echo $arr_test["info"]["info_arr"]["f_2"];

// // echo $arr_test[2]["info_arr"]["f_1"];


// // function fnc_sum($param_a, $param_b)
// // {
// //     $sum=$param_a + $param_b;
// //     return $sum;
// // }
// // echo fnc_sum(3,5);

// function fnc_sum2( ...$param_numbers )
// {
//     // $sum = 0;
    
//     return array_sum($param_numbers);
// }
// echo fnc_sum2(3,4,6,7);




// function fnc_global()
// {
//     global $global_i;
//     $global_i = 0;
// }
// $global_i = 5;
// echo $global_i;


// static은 처음은 그값이 설정값 이지만 또 호출되면 최종적으로 연산된 값으로 존재
// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }

// fnc_static();
// fnc_static();
// fnc_static();


// function fnc_reference( &$param_str )
// {
//     $param_str = "fnc_reference";
// }
// $str = "aaa";
// fnc_reference( $str );
// echo $str;

// for( $i=2; $i <= 9; $i++)
// {
//     echo "$i 단\n";
//     for( $x = 1; $x <= 9; $x++ )
//     {
//         echo "$i x $x = ", $i*$x, "\n";
//     }
//     echo "\n";
// }

// $num = 4;
// for( $j=1; $j <= $num; $j++)
// {
//     for($i=1; $i<=$j; $i++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }


// function star_react($num)
// {
//     for( $j=1; $j <= $num; $j++)
//     {
//         star($j);
//     }
// }
// function star($j)
// {
//     for($i=1; $i<=$j; $i++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }
// star_react(3);



/***********************
파일명 :
시스템명 :
이력
    v001 : new - 사번
    v002 : fnc_star 수정 - 사번 
************************/


// function fnc_star($j) // v002 del
// function fnc_star($j, $str = "&") // v002 add ($str = &는 함수 호출할때 $str값을 안넣으면 디폴트값으로 &를 가져 온다는 소리)
// {
//     for($i=1; $i<=$j; $i++)
//     {
//         // echo "*"; // v002 del
//         echo $str; // v002 add
//     }
//     echo "\n";
// }
// fnc_star(1,"&");
// // star(2);
// // star(3);
// // star(4);

// function fnc_reference2( &$param_str )
// {
//     echo "2번 : $param_str \n";
//     $param_str = "fnc_reference2에서 값 변경";
//     echo "3번 : $param_str \n";
// }
// $str = "aaa";
// echo "1번 : $str \n";
// fnc_reference2( $str );
// echo "4번 : $str \n";

// class Food
// {
//     // 접근 제어 지시자
//     // public
//     // private
//     // protected

//     // 멤버 변수
//     protected $str_name;
//     protected $int_price;

//     // 메소드
//     public function __construct( $param_name, $param_price )
//     {
//         $this->str_name = $param_name;
//         $this->int_price = $param_price;
//     }

//     public function fnc_print_food()
//     {
//         $str = $this->str_name." : ".$this->int_price."원\n";
//         echo $str;

//         // // 또는 
//         // echo $this->str_name." : ".$this->int_price."원\n";
//     }

//     public function fnc_set_price($param_prcie_edit)
//     {
//         $this->int_price = $param_prcie_edit;
//         // echo $this->str_name." : ".$this->int_price."원\n";
//     }

// }
// // $obj_food = new Food("탕수육",10000);
// // // echo $obj_food->str_name; // private 변수라 외부에서 바로 접속 못함
// // $obj_food->fnc_print_food();

// // // // Food class의 멤버 변수 $int_price 값을 12000으로 바꿔주세요
// // $obj_food->fnc_set_price(12000);
// // $obj_food->fnc_print_food();





// // 상속 멤버 변수 (protected) : 부모 클래스의 객체들을 자식 클래스가 상속받아 사용 할 수 있다.(부모 메서드, 부모 변수 사용가능)
// class KoreanFood extends Food
// {
//     protected $side_dish;

//     public function __construct( $param_name, $param_price, $param_side_dish )
//     {
//         $this->str_name = $param_name;
//         $this->int_price = $param_price;
//         $this->side_dish = $param_side_dish;
//     }

//     // 오버라이딩 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의
//     public function fnc_print_food()
//     {
//         // $str = $this->str_name." : ".$this->int_price."원 : ".$this->side_dish."\n;
//         // echo $str;
//         parent::fnc_print_food();
//         $str = "반찬 : ".$this->side_dish."\n";
//         echo $str;
//     }
// }

// $obj_korean_food = new KoreanFood( "치킨", 20000, "치킨무" );
// $obj_korean_food->fnc_print_food();


// p185 그려보기
class People
{
    protected $name;
    public function setName($param_name)
    {
        $this->name = $param_name;
    }
    public function people_print()
    {
        echo "이름 : $this->name \n";
    }
}

class Student extends People
{
    protected $id;
    // public function __construct( $param_name, $param_id )
    // {
    //     $this->name = $param_name;
    //     $this->id = $param_id;
    // }
    public function setid($param_id)
    {
        $this->id = $param_id;
    }
    public function studentPrint()
    {
        parent::people_print();
        echo "아이디 : $this->id \n";
    }
}
$obj_student = new Student();
$obj_student->setName("박병주");
$obj_student->setid( 123456789 );
$obj_student->studentPrint();



// $obj_student->studentPrint("홍길동");





?>