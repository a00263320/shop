<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>刪除商品</title>
</head>
<body>
    <form name="input" action="/api">
        @csrf
        @method('post')
        刪除商品成功
    <input type="submit" value="返回商品總覽">
    </form>
</body>
</html>
