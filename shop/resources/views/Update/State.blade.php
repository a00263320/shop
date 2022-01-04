<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>上架/下架</title>
</head>
<body>
    <form name="input" action="/stateapi/{{$state ['id']}}" method="post">
    @csrf
    更新產品上/下架
    <input type="text" name="input_state">

    <input type="submit" value="確定更新產品上/下架">
    </form>
</body>
</html>
