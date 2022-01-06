<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入畫面</title>
</head>
<body>
    {{-- <a href="/sign">還沒註冊嗎?</a> --}}
    <form action="/sign" method="get">
    <a href="/sign">還沒註冊嗎? 點這裡註冊</a>
    </form>

    <form action="/login-api" method="post">
        @csrf
        輸入帳號
        <input type="text" name="user" method="get"/>

        輸入密碼
        <input type="password" name="password" method="get"/>

         <input type="submit" value="登入" />
    </form>
</body>
</html>
