
{{-- layout.blade.php를 상속(blade.blade.php가 자식이 되고 layout.blade.php가 부모가 된다) --}}
@extends('layout.layout')

{{-- 부모 템플릿에 해당하는 yield 부분에 자리에 차지 --}}
@section('title', '자식타이틀')

{{-- 처리해야하는 코드가 많을 경우에는, @section ~ @endsection 에 소스코드를 기재 --}}
@section('contents')
    <h2>콘텐츠 섹션입니다</h2>
    <p>아아아아</p>
    <p>콘텐츠 끝</p>
@endsection


@section('test')
    <h2>자식의 섹션입니다</h2>
    <p>자식자식</p>
@endsection

{{-- 조건문, 또한 section으로 안 묶을시 화면 출력 순서는 자식 클래스가 먼저 출력되고 그다음에 부모것 출력 --}}
@section('if')
    @if($data['gender'] === '남자')
        <span>남자남자</span>
    @elseif($data['addr'] === '대구')
        <span>대구대구/span>
    @else
        <span>모든 조건 탈락</span>
    @endif
@endsection

{{-- 반복문 --}}
@section('for')
    <hr>
    <h5>for</h5>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
@endsection

{{-- foreach와 forelse의 경우 $loop변수가 생성되고 사용 가능 ref) count는 루프 총 개수, iteration은 현재 루프 실행 횟수 --}}
@section('foreach')
    <hr>
    <h5>foreach</h5>
    @foreach($data as $key => $value)
        <span>{{$loop->count.' >> '.$loop->iteration}}</span>
        <span>{{$key.' : '.$value}}</span>
        <br>
    @endforeach
@endsection

@section('forelse')
    <hr>
    <h5>forelse</h5>
    @forelse($data2 as $key => $value)
        <span>{{$key.' : '.$value}}</span>
    @empty
        <span>빈 배열 입니다.</span>
    @endforelse
@endsection