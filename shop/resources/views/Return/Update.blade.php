<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品更新</title>
</head>
<body>
    <form action="/{{ $id }}" >
    @csrf
    @method('put')
    <input type="submit" value="返回商品總覽">
    </form>
</body>
</html>