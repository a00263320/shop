<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜尋結果</title>
</head>

<form action="/api" method="get">
    <button type="submit" style="width:96px; height:60px;">返回商店</button>
</form>

<body>
    <table>
        <thead>
            <tr>
                <th>商品圖片</th>
                <th>商品名稱</th>
                <th>商品描述</th>
                <th>庫存數量</th>
                <th>商品價格</th>
                <th>商品上架/下架</th>
                <th>操作</th>
            </tr>
        </thead>
        @foreach ($search as $search)
            <tr>
                <td><img src="{{ $search['photo'] }}" width="120" heigh="80"></td>
                <td>{{ $search['name'] }}</td>
                <td align="center" width="500">{{ $search ['describe']}} </td>
                <td>{{ $search['quantity'] }}</td>
                <td>{{ $search['price'] }}</td>
                <td>{{ $search['state'] }}</td>
                <td>
                    <form action="/api/{{ $search['id'] }}" method="get">
                        <button type="submit" style="width:96px; height:80px;">檢視產品資訊</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
