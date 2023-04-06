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


// $arr_card = array(2,3,4,5,6,7,8,9,10,"A","K","Q","J");
// $arr_card_result=array();

// for($i=0; $i<=3; $i++)
// {
//     foreach($arr_card as $val)
//     {
//         $arr_card_result[]=$val;
//     }
// }

// class Poker {
//     public function fnc_draw()  // 뽑기
//     {
//         $arr_card = array(2,3,4,5,6,7,8,9,10,"A","K","Q","J");
//         $arr = array($arr_card
//             , $arr_card
//             , $arr_card
//             , $arr_card
//             );
        
//         $int = $arr[mt_rand(0,3)][mt_rand(0,12)];
        
        
        
//         var_dump($int);
//         // $arr_card=arrayp[3]
        
//     }
// }

// $obj_poker = New Poker;
// echo $obj_poker->fnc_draw();

// $str = "5♠K♣";
// $su = preg_replace("/[^A-Z0-9]*/s", "", $str);
// echo $su;



class BlackJack
{
	private $arr_num;
	private $arr_shape;
	private $arr_deck;
    private $deck_count;
    private $deck_draw_dealer;
    private $deck_draw_user;
    private $dealer_sum;
    private $user_sum;

	// construct
	public function __construct()
	{
		$this->arr_num = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
		$this->arr_shape = array("♠", "♣", "◆", "♥");
		$this->set_deck();
        $this->deck_count = (count($this->arr_num) * count($this->arr_shape))-1;
	}

	// set
	private function set_deck()
	{
		// 카드 52장 덱에 셋팅
		foreach( $this->arr_shape as $shape )
		{
			foreach( $this->arr_num as $num )
			{
				$this->arr_deck[] = $num.$shape;
			}
		}
		// 덱 셔플
		shuffle( $this->arr_deck );
	}

    public function deck_draw() // 카드 뽑고 저장
    {
        if($this->deck_count%2 === 1) {
            $this->deck_draw_dealer[] = $this->arr_deck[$this->deck_count];
            
            
        }
        else if($this->deck_count%2 === 0) {
            $this->deck_draw_user[] = $this->arr_deck[$this->deck_count];
            
            
        }
        $this->deck_count--;

        var_dump($this->deck_draw_dealer);
        var_dump($this->deck_draw_user);
    }

    public function deck_value()  // 카드 값 변경
    {
        $str_1=array();
        $str_2=array();
        foreach( $this->deck_draw_dealer as $dealer_deck )
        {
            $str_1[] .= preg_replace("/[^A-Z0-9]*/s", "", $dealer_deck);
        }
        foreach( $this->deck_draw_user as $dealer_user )
        {
            $str_2[] .= preg_replace("/[^A-Z0-9]*/s", "", $dealer_user);
        }
        // $result_1 = preg_replace("/[^A-Z0-9]*/s", "", $str_1); //  문자열에서 숫자만 출력할때
        // $result_2 = preg_replace("/[^A-Z0-9]*/s", "", $str_2);
        $this->deck_draw_dealer = $str_1;
        $this->deck_draw_user = $str_2;
    }

    public function dealer_sum()
    {
        
        foreach( $this->deck_draw_dealer as $dealer_deck_1)
        {
            
            if( $dealer_deck_1 == "J" || $dealer_deck_1 == "Q" || $dealer_deck_1 == "K" || $dealer_deck_1 == "A" )
            {
                $this->dealer_sum += 10;
            }
            else
            {
                $this->dealer_sum += $dealer_deck_1;
            }
        }
        echo $this->dealer_sum;
        $this->user_sum();
    }

    public function user_sum()
    {
        
        foreach( $this->deck_draw_user as $user_deck_1)
        {
            
            if( $user_deck_1 === "J" || $user_deck_1 === "Q" || $user_deck_1 === "K" || $user_deck_1 === "A" )
            {
                $this->user_sum += 10;
            }
            else
            {
                $this->user_sum += $user_deck_1;
            }
        }
        echo $this->user_sum;
        $this->print_win_lose();
    }

    public function print_win_lose()
    {
        if ($this->dealer_sum > $this->user_sum)
        {
            echo "dealer 승리";
        }
        else if ($this->dealer_sum === $this->user_sum)
        {
            echo "무승부";
        }
        else
        {
            echo "user 승리";
        }
    }



	// TODO : debug
	public function debug()
	{
		// var_dump( $this->arr_deck );
        // var_dump( $this->deck_count );
        var_dump( $this->deck_draw_dealer );
	}
}
$obj_bj = new BlackJack();
$obj_bj->deck_draw();
$obj_bj->deck_draw();
$obj_bj->deck_draw();
$obj_bj->deck_draw();
$obj_bj->deck_value();
$obj_bj->dealer_sum();



// $obj_bj->debug();












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