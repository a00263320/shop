<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編輯</title>
</head>
<body>
    <form name="input" action="/api/edit" method="get">
        編輯產品種類
        <input type="text" name="input_class">
        編輯產品名稱
        <input type="text" name="input_name">
        編輯產品描述
        <input type="text" name="input_describe">
        編輯產品數量
        <input type="text" name="input_quantity">
        編輯產品價格
        <input type="text" name="input_price">
    
        <input type="submit" value="確定">
    </form>
</body>
</html>