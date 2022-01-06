<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>產品資訊</title>
</head>

<body>
    <h1>產品資訊</h1>
    <br>

    <form action="/api" method="get">
        <button type="submit" style="width:96px; height:60px;">返回商店</button>
    </form>
    <br>

    {{-- $show = 後端給的'show' --}}
    <table>
        <thead>
            <tr>
                <th>商品圖片</th>
                <th>商品種類</th>
                <th>商品名稱</th>
                <th>商品描述</th>
                <th>商品價格</th>
                <th>庫存數量</th>
                <th>商品上架/下架</th>
                <th>操作</th>
            </tr>
        </thead>


        <tr>
            <td><img src={{ $show['photo'] }} width="120" heigh="80"></td>
            <td align="center">{{ $show['class'] }}</td>
            <td align="center">{{ $show['name'] }}</td>
            <td align="center" width="500">{{ $show['describe'] }} </td>
            <td align="center">{{ $show['price'] }}</td>
            <td align="center">{{ $show['quantity'] }}</td>
            <td align="center">{{ $show['state'] }}</td>

            <td>
                <form action="/api/{{ $show['id'] }}/edit" method="get">
                    <button type="submit" style="width:130px; height:80px;">編輯產品所有資訊</button>
                </form>

                <form action="/pri-qua/{{$show['id']}}" method="get">
                    <button type="submit" style="width:130px; height:25px">更新產品價錢/數量</button>
                </form>

                <form action="/state/{{$show['id']}}" method="get">
                    <button type="submit" style="width:130px; height:25px">更新產品上/下架</button>
                </form>
            </td>


        </tr>
    </table>

</body>

</html>
