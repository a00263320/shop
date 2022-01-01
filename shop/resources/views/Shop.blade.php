<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商店</title>
</head>

<body>
    <h1>商店總覽</h1>
    <br>

    <form action="/api/creat" method="get">
        <button type="submit">新增商品</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>商品編號</th>
                <th>商品圖片</th>
                <th>商品種類</th>
                <th>商品名稱</th>
                <th>商品描述</th>
                <th>庫存數量</th>
                <th>商品價格</th>
                <th>商品上架/下架</th>
                <th>操作</th>
            </tr>
        </thead>

        @foreach ($shop as $shoplist)
           {{-- 給後端用 as 給下方用 --}}
       <tr>
           
            <td>{{ $shoplist ['id']}}</td>
            <td>{{ $shoplist ['photo']}}</td>
            <td>{{ $shoplist ['class']}}</td>
            <td>{{ $shoplist ['name']}}</td>
            <td>{{ $shoplist ['describe']}}</td>
            <td>{{ $shoplist ['quantity']}}</td>
            <td>{{ $shoplist ['price']}}</td>
            <td>{{ $shoplist ['state']}}</td>
            <td>
                <form action="/2" method="get">
                <button type="submit">檢視</button>
                </form>
    
                <form action="/2/edit" method="get">
                <button type="submit">編輯</button>
                </form>
    
                <form action="/2/delete" method="post">
                    @csrf
                    @method('delete')
                <button type="submit">刪除</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html>
