<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names Index</title>
</head>
<body>
    <a href="/names">names</a>
    <br>
    <br>
    <a href="{{url('/names');}}">names</a>
    <br>
    <br>
    {{-- 주석처리는 이렇게, 에코랑 같은 의미 --}}
    <a href="{{route('names.index');}}">names</a>
</body>
</html>