<?php

class Car
{
    // $car_name : 차이름을 저장하는 멤버변수
    // $car_color : 차 색갈을 저장하는 멤버변수
    // method 명 : car_make
    // parameter : 
    //         string $param_name
    //         string $param_color
    // 기능 : 멤버변수에 값을 세팅
    
    // method명 : car_out
    // parameter : 없음
    // 기능 : 자동차 이름과 색깔을 출력
    // (형식 : $car_color. "색".$cal_name)

    public $car_name;
    public $car_color;
    public function car_make($param_name, $param_color)
    {
        $this->car_name=$param_name;
        $this->car_color=$param_color;
        
    }
    // public function car_out()
    // {
    //     echo $this->car_color."색 ".$this->car_name;
    // }
    public function car_out()
    {
        echo $this->car_color."색 ".$this->car_name;
    }
    

}

$obj_car = new Car;
// $obj_car->car_name = $obj_car->car_make("name", "red");
// echo $obj_car->car_name;

$obj_car->car_make("차", "파란");
$obj_car->car_out();



?>