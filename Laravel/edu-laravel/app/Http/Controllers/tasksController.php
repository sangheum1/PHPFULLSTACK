<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * 리소스 목록 페이지
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'tasks.index';
    }

    /**
     * Show the form for creating a new resource.
     * 리소스 생성을 위한 입력 폼 페이지
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'tasks.create';
    }

    /**
     * Store a newly created resource in storage.
     * 리소스 생성  처리(db에 저장하고 변경하는 것 처리)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrOnly = $request->only(['id', 'pw']);
        return 'tasks.store id : '.$arrOnly['id'].'  pw : '.$arrOnly['pw'];

        // return 'tasks.store id : '.$request->id.'  pw : '.$request->pw; // request는 객체여서 가능
    }

    /**
     * Display the specified resource.
     * 리소스 조회 페이지
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'tasks.show : '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     * 리소스 수정 폼 페이지
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'tasks.edit : '.$id;
    }

    /**
     * Update the specified resource in storage.
     * 리소스 수정 처리
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        var_dump($request); // request의 내용 확인하기 위해 한번 찍어보기
        $arrAll = $request->all(); // 사용자가 전달하는 모든 데이터를 획득(배열)
        $arrOnly = $request->only(['id', 'name']); // 사용자가 전달한 데이터 중에 해당하는 데이터만 획득(배열)
        $oneGet = $request->get('pw'); // 사용자가 전달한 데이터 중에 선택한 한개의 데이터 값만 획득(배열 x)

        var_dump($arrAll);
        var_dump($arrOnly);
        var_dump($oneGet);

        return 'tasks.update : '.$id;
    }

    /**
     * Remove the specified resource from storage.
     * 리소스 삭제 처리
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'tasks.destory : '.$id;
    }
}
