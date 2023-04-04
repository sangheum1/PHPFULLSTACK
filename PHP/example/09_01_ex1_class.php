<?php

// class : 비슷한 객체들이 모여서 이루는 클래스 (선언할때 첫글자는 대문자)
// (사과.딸기.바나나.메론이라는 객체들이 모여서 과일이라는 클래스를 이룸)

class Student {

    // 변수 선언할땐 접근제어 지시자(public.private.)선언 해야함
    // 변수 : 클래스 멤버 변수라고 명명
    public $std_name; // 어디서든 접근(사용) 가능함
    private $std_id; // Student class 내에서만 접근 가능
    protected $std_age; // 상속 class 내에서만 접근 가능
    

    // class 안에 있는 function을 method라고 부름
    public function print_student($param_std_name, $param_std_age)
    {
        $result_name= "이름 : ".$param_std_name;
        $result_age= "나이 : ".$param_std_age;
        echo $result_name;
        echo "\n";
        echo $result_age;
    }
    // private 객체를 외부에서 사용할수 있는 방법
    // 1. set으로 함수 하나 만들어서 값을 저장한다.
    public function set_std_id($param_id) {
        // this 포인트 : class 자기 자신을 가리키고 있음
        $this->std_id = $param_id;
    }

    // 2. get을 이용하여 저장된 값을 출력시키는것
    public function get_std_id() {
        return $this->std_id;
    }
}
// class를 초기화
$obj_student = new Student;
// class의 method를 호출
// $obj_student->print_student("홍길동", 27);
// class의 멤버변수 사용방법
// $obj_student->std_name = "갑돌이";
// echo $obj_student->std_name;

// 지시자가 private인 경우엔 class 내에서 선언 해야하고 외부에선 안됨
// $obj_student->$std_id = "갑순이";   => 외부선언이라 안됨


// getter,setter로 private 접근하는 방법(class student 내에서 함수 만들어서 사용)
// $obj_student->set_std_id("갑순이id");
// echo $obj_student->get_std_id();



// 생성자(constructor)
class food
{
    private $food_name;

    // 생성자
    public function __construct($param_food_name)
    {
        $this->food_name = $param_food_name;
    }

    public function print_food_name()     //  생성자에 탕수육이 들어갔나 찍어보기 위해 만든것
    {
        echo $this->food_name;
    }
}

$obj_food = new food("탕수육");
$obj_food->print_food_name();







?>