<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品</title>
</head>
<body>
    <form action="/{{ $id }}" method="get">
    <input type="submit" value="返回商品總覽">
    </form>
    
    <table>
    @foreach ($product as $productlist)
        <tr>
            <td>{{ $productlist ['photo']}}</td>
            <td>{{ $shoplist ['class']}}</td>
            <td>{{ $shoplist ['name']}}</td>
            <td>{{ $shoplist ['describe']}}</td>
            <td>{{ $shoplist ['quantity']}}</td>
            <td>{{ $shoplist ['price']}}</td>
            <td>{{ $shoplist ['state']}}</td>
        </tr>
    @endforeach
    </table>   
</body>
</html>