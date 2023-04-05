<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
// (21을 넘으면 그 사람이 지는거고 둘다 21넘으면 유저가 지는것)
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 드로우
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//8. 한번 사용한 카드는 다시 쓸 수 없다.
// 2~10 kqja 13*4 52개를 배열로


$arr_card = array(2,3,4,5,6,7,8,9,10,"A","K","Q","J");
$arr = array("0" => $arr_card
            , "1" => $arr_card
            , "2" => $arr_card
            , "3" => $arr_card
            );

class Poker {
    public function fnc_draw()  // 뽑기
    {
        $arr_card = array(2,3,4,5,6,7,8,9,10,"A","K","Q","J");
        $arr = array($arr_card
            , $arr_card
            , $arr_card
            , $arr_card
            );
        
        $int = $arr[mt_rand(0,3)][mt_rand(0,12)];
        // unset($int);
        // $arr = $int[mt_rand(0,12)];
        // var_dump($arr);
        // in_array($arr,$arr_card)
        
        
        return $int;
        // $arr_card=arrayp[3]
        
    }
}

$obj_poker = New Poker;
echo $obj_poker->fnc_draw();


// $arr = array();
// // echo $arr[0];
// for($i=0; $i <= 5; $i++) {
//     $arr[$i] = rand(1,45);

//     for($p=0; $p < $i; $p++)
//     {
//         if ($arr[$i] == $arr[$p])
//         {
//             $i--;
//         }
//     }
// }
// print_r($arr);

// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";







?>