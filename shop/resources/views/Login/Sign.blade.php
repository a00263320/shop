<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>創建使用者</title>
</head>
<body>
    <form action="/sign-api" method="post">
        @csrf
        輸入使用者名稱:
        <input type="text" placeholder="使用者名稱" name="name">
        <br>
        <h3></h3>
        輸入使用者密碼:
        <input type="text" placeholder="使用者密碼" name="password">
        <br>
        <h3></h3>
        輸入使用者信箱:
        <input type="text" placeholder="使用者信箱" name="email">
        <br>
        <input type="submit" value="確定創建">
    </form>

    <form action="/" method="get">
        <button type="submit">返回登入頁面</button>
    </form>

</body>
</html>
