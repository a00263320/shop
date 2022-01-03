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

    <form action="/api/create" method="get">
        @csrf
        <button type="submit" style="width:96px; height:50px;">新增商品</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>商品種類</th>
                <th>商品圖片</th>
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

            <td align="center">{{ $shoplist ['class']}}</td>
            {{-- 讀取資料庫照片網址 --}}
            <td><img src= "{{ $shoplist ['photo']}}" width="120" heigh="80" ></td>
            {{-- align="center"->置中 --}}
            <td align="center">{{ $shoplist ['name']}}</td>
            {{-- 調整顯示大小 --}}
            <td width="500">{{ $shoplist ['describe']}}</td>
            <td align="center">{{ $shoplist ['quantity']}}</td>
            <td align="center">{{ $shoplist ['price']}}</td>
            <td align="center">{{ $shoplist ['state']}}</td>
            <td>
                <form action="/api/{{ $shoplist ['id'] }}" method="get">
                <button type="submit" style="width:96px; height:80px;">檢視產品資訊</button>
                </form>

                <form action="/api/{{ $shoplist ['id'] }}" method="post">
                    @csrf
                    @method('delete')
                <button type="submit" style="width:96px; height:20px;">刪除</button>
                {{-- style->改變外觀 --}}
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html>
