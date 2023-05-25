<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ------------------
        // 쿼리 빌더 (2가지 방법)
        // ------------------
        // $result = DB::select('select * from categories');
        // $no = '5';
        // $result = DB::select(
        //     'select * from categories where no = :no'
        //     , [':no' => $no]
        // );

        // $result = DB::select(
        //     'select * from categories where no = ? and no = ?'
        //     , [$no, 7]
        // );

        // 예제
        $input = ['4', '7', '8']; // categories의 no 컬럼
        // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. (게시글 번호로 오름차순 정렬 후 상위 5개만)

        

        // $result = DB::select(
        //     'SELECT brd.bno, brd.btitle, ctg.name 
        //     FROM boards brd 
        //     INNER JOIN categories ctg 
        //     ON brd.category = ctg.no
        //     WHERE ctg.no = :no OR ctg.no = :no1 OR ctg.no = :no2
        //     ORDER BY brd.bno ASC limit 5'
        //     , ['no' => $input[0], 'no1' => $input[1], 'no2' => $input[2]]         // [] 이렇게 쓰는게 PDO 에서 prepare 하는거랑 같은 의미!!
        //     );

        // $result3 = DB::select('SELECT b.bno, b.btitle, c.name FROM categories c, boards b WHERE c.no = b.category AND c.no IN(?, ?, ?) ordery BY b.bno LIMIT 5',$input);
        // result2 sql문 이랑 같은 말

        // $result2 = DB::insert(
        //     'insert into boards(
        //     category
        //     , btitle
        //     , bcontent
        //     , created_at
        //     , updated_at
        //     )
        //     values (
        //     :category
        //     , :btitle
        //     , :bcontent
        //     , :created_at
        //     , :updated_at
        //     )'
        //     , [
        //         'category' => '1'
        //         , 'btitle' => '제목'
        //         , 'bcontent' => '내용'
        //         , 'created_at' => now()
        //         , 'updated_at' => now()
        //     ]
        // );

        // // 방금 작성한 제목 : test 내용 testtest로 바꿔주세요(update)
        // $result = DB::update('UPDATE boards 
        //     SET btitle = :title, bcontent = :content 
        //     WHERE bno = :no'
        //     ,['title' => 'test', 'content' =>'testtest', 'no' => 60012]
        // );

        // // return var_dump(now('Asia/Seoul')); // 서울 시간
        // return var_dump($result); // 실행이 성공적이면 1 실패면 0 을 반환(영향받은 행이 넘겨옴)

        // // delete
        // $result = DB::delete('delete from boards where bno in ( ?, ? )',[60011,60012]);

        // ------------------
        // 쿼리 빌더 체이닝
        // ------------------
        $no = '5';
        // // select 문
        // // $result = DB::table('categories')->where('no', '=', '$no')->get(); // get() : sql 결과값을 db에 질의해서 가져옴, '='이것만 생략 가능(<,>는 불가)
        // $result = DB::table('categories')->where('no', '=', $no)->dd(); // dd() : 체이닝 기법으로 작성한 것을 sql로 보여주는 메소드(sql 실행은 x)   => TODO : 삭제예정(나중에 할작업은 TODO 코멘트 남기기)

        // 1. select * from categories where no = ? or no = ?
        $no1 = '5';
        $no2 = '8';
        // $result = DB::table('categories')->where('no', $no1)->orWhere('no', $no2)->dd();

        // // 2. select * from categories where no in (?,?)
        // $result = DB::table('categories')->whereIn('no',[$no1,$no2])->dd();

        // // 2-1. select * from categories where no NOT in (?,?) : no 값이 아닌것들을 출력
        // $result = DB::table('categories')->whereNotIn('no',[$no1,$no2])->dd();

        // // 2-2. select id, no, name from categories
        // $result = DB::table('categories')
        //     ->select('id', 'no', 'name')
        //     ->dd();

        // // select id, no, name from categories order by name desc;
        // $result = DB::table('categories')->select('id', 'no', 'name')->orderBy('name', 'desc')->dd();

        // // select * from categories where no = $no1 and no = $no2
        // $result = DB::table('categories')->where('no', $no1)->Where('no', $no2)->get();

        // // ****주의해서 사용(가급적 사용x)**** whereRaw() =>prepare로 안되기때문에
        // $result = DB::table('categories')->whereRaw('no = '.$no1);

        // // first() : 결과값의 최상위 하나만 결과 도출(실패시 false 리턴)
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();

        // // firstOrFail() : first() 와 같은 동작을 하는데 실패시 결과가 예외 발생(404 페이지)
        // $result = Board::orderBy('bno', 'desc')->firstOrFail(); // 쿼리 빌더가 아니라 엘로퀀트 모델 객체(ORD)에서만 사용가능(DB::table~~는 쿼리빌더라서 firstorfail 메소드 못씀)

        // // 집계 메소드
        // $result = DB::table('boards')->count(); // 결과의 레코드 개수 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치 반환
        // $result = DB::table('boards')->min('bno');

        // // 트랜잭션
        // DB::beginTransaction(); // 트랜잭션 시작
        // DB::rollback(); // 롤백
        // DB::commit(); //커밋
        // return var_dump($result);

        // 카테고리가 활성화 되어 있는  게시글의 카테고리 별 개수를 출력해 주세요
        // 카테고리 번호, 카테고리명, 개수

        // $result = DB::table('categories')->select(DB::raw('boards.category, categories.name, COUNT(boards.bno)'))->join('boards','boards.category','=', 'categories.no')
        // ->where('active_flg','1')->groupBy('boards.category', 'categories.name')->get();

        $result = DB::table('categories')
        ->select('categories.no', 'categories.name', DB::raw('count(*) as cnt'))    // count() 메소드가 mariadb 함수여서 문자열로 인식하기 위해 DB::raw 붙임
        ->join('boards', 'categories.no', 'boards.category')  // '='이건 생략 가능
        ->where('categories.active_flg', '1')
        ->groupBy('categories.no', 'categories.name')  // 원칙적으로 select에서 찾고자 하는 값들을 다 groupby 안에다 넣어야함(그래서 2개)
        ->get();

        var_dump($result);



//         SELECT ctg.no, ctg.name, COUNT('ctg.active_flg')AS cnt 
// FROM categories ctg 
// INNER JOIN boards brd ON brd.category = ctg.no
// WHERE ctg.active_flg = '1'
// GROUP BY ctg.no;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
