<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>更新</title>
</head>
<body>
    <form name="input" action="/api/{{ $showup ['id']}}" method="post">
    @csrf
    @method('put')
    更新產品圖片
    <input type="text" name="input_photo">
    <br>
    更新產品種類
    <input type="text" name="input_class">
    <br>
    更新產品名稱
    <input type="text" name="input_name">
    <br>
    更新產品描述
    <input type="text" name="input_describe">
    <br>
    更新產品數量
    <input type="text" name="input_quantity">
    <br>
    更新產品價格
    <input type="text" name="input_price">
    <br>
    更新產品上/下架
    <input type="text" name="input_state">
    <input type="submit" value="確定更新產品資訊">
    </form>
</body>
</html>
