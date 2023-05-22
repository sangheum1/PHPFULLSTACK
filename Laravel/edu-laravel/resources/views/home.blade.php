<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home!!</h1>
    <br>
    <br>
    <br>

    <form action="/method" method="post">
        @csrf <!-- <= 사이트 간 요청 위조 방지하기 안적으면 작동x -->
        <button type="submit">POST</button>
    </form>
    <br>
    <form action="/method" method="post">
        @csrf
        @method('PUT')
        <button type="submit">PUT</button>
    </form>
    <br>
    <form action="/method" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
</body>
</html>