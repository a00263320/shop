<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新增</title>
</head>
<body>
    <form name="input" action="/login/api" method="post">
    @csrf
    輸入產品種類
    <input type="text" name="input_class">
    <br>
    <br>
    輸入產品名稱
    <input type="text" name="input_name">
    <br>
    <br>
    上傳產品圖片
    <input type="text" name="input_photo">
    <br>
    <br>
    輸入產品描述
    <br>
    <br>
    <textarea name="input_describe" cols="30" rows="10"></textarea>
    <br>
    <br>
    輸入產品數量
    <input type="text" name="input_quantity">
    <br>
    <br>
    輸入產品價格
    <input type="text" name="input_price">
    <br>
    <br>
    產品上架/下架
    <input type="text" name="input_state">

    <input type="submit" value="確定新增">
    </form>
</body>
</html>
