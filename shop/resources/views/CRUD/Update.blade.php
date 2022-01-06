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
    更改產品圖片
    <input type="text" name="input_photo" value="{{ $showup->photo }}">
    <br>
    <br>
    更改產品種類
    <input type="text" name="input_class" value="{{ $showup->class }}">
    <br>
    <br>
    更改產品名稱
    <input type="text" name="input_name" value="{{ $showup->name }}">
    <br>
    <br>
    更改產品描述
    <br>
    <br>
    <textarea name="input_describe" cols="30" rows="10">{{ $showup->describe }}</textarea>
    {{-- <input type="text" name="input_describe" value="{{ $showup->describe }}" cols="30" rows="20"> --}}
    <br>
    <br>
    更改產品數量
    <input type="text" name="input_quantity" value="{{ $showup->quantity }}">
    <br>
    <br>
    更改產品價格
    <input type="text" name="input_price" value="{{ $showup->price }}">
    <br>
    <br>
    更改產品上/下架
    <input type="text" name="input_state" value="{{ $showup->state }}">
    <input type="submit" value="確定更新產品資訊">
    </form>
</body>
</html>
