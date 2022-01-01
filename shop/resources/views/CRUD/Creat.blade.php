<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新增</title>
</head>
<body>
    <form name="input" action="/api/creat" method="get">
    @csrf
    輸入產品種類
    <input type="text" name="input_class">
    輸入產品名稱
    <input type="text" name="input_name">
    輸入產品描述
    <input type="text" name="input_describe">
    輸入產品數量
    <input type="text" name="input_quantity">
    輸入產品價格
    <input type="text" name="input_price">

    <input type="submit" value="確定新增">
    </form>
</body>
</html>