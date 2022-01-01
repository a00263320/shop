<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>更新</title>
</head>
<body>
    <form name="input" action="/api/update/{{ $update ['id']}}" method="post">
    @csrf
    更新產品種類
    <input type="text" name="input_class">
    更新產品名稱
    <input type="text" name="input_name">
    更新產品描述
    <input type="text" name="input_describe">
    更新產品數量
    <input type="text" name="input_quantity">
    更新產品價格
    <input type="text" name="input_price">

    <input type="submit" value="確定更新">
    </form>
</body>
</html>