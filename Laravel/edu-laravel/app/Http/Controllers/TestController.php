<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        return view('test')->with('name', '미스터 존');
        // name,미스터존 value가 함께 view에 호출
        // return 'test.index!!';
    }
}
