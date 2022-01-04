<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>更新產品價錢/數量</title>
</head>
<body>
    <form name="input" action="/pri-qua/{{$priqua ['id']}}" method="post">
        @csrf
        更新產品價錢
        <input type="text" name="input_price">
        更新產品數量
        <input type="text" name="input_quantity">

        <input type="submit" value="確定更新價錢/數量">
        </form>
</body>
</html>
