<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商店</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
        {{-- 網頁背景 --}}
<body>
    <h1>商店總覽</h1>
    <br>

    <form action="/api/create" method="get">
        @csrf
        <button type="submit" style="width:115px; height:50px;">新增商品</button>
    </form>

    <form action="/api" method="get">
        <button type="submit" style="width:115px; height:50px;">返回商品總覽</button>
    </form>

    <form action="/" method="get">
        <button type="submit" style="width:115px; height:50px;">登出</button>
    </form>

    <form action="/search" method="get">
        <input type="text" placeholder="關鍵字" name="keyword">
        <button type="submit">搜尋產品</button>
    </form>
    <br>

    產品分類查詢:
    <a href="/search?keyword=滑鼠">滑鼠</a>
    <a href="/search?keyword=鍵盤">鍵盤</a>
    <a href="/search?keyword=螢幕">螢幕</a>

    <div id="accordion-faq" class="collapse-style-1 cillapse-style-4" role="tablist" aria-multiselectable="ture">
        {{-- 使用Bootstrap  card變成卡片式寫法 --}}
        @foreach ($shop as $shoplist)
        {{-- 使迴圈跑card能夠並排 --}}
        {{-- style="float:left; display:inline" --}}
        <div class="wrap"  style="width:300px; height:600px;float:left; display:inline" >
            <div class="col-sm-6">
                <div class="card" style="width: 18rem; height: 35rem">
                    <img src="{{ $shoplist['photo'] }}" style="width: 100; height: 230px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" color="red">{{ $shoplist['name'] }}</h5>
                        <p class="card-textarea">{{ $shoplist['describe'] }}</p>
                        <a href="/api/{{ $shoplist['id'] }}" class="btn btn-primary">檢視產品資訊</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>

        @endforeach
    </div>
    {{-- <table> --}}

        {{-- <thead>
            <tr>
                <th>商品種類</th>
                <th>商品圖片</th>
                <th>商品名稱</th>
                <th>商品描述</th>
                <th>商品價格</th>
                <th>庫存數量</th>
                <th>商品上架/下架</th>
                <th>操作</th>
            </tr>
        </thead>

        @foreach ($shop as $shoplist)
            {{-- 給後端用 as 給下方用 --}}
            {{-- <tr>

                <td align="center">{{ $shoplist['class'] }}</td>
                {{-- 讀取資料庫照片網址 --}}
                {{-- <td><img src="{{ $shoplist['photo'] }}" width="120" heigh="80"></td> --}}
                {{-- align="center"->置中 --}}
                {{-- <td align="center">{{ $shoplist['name'] }}</td> --}}
                {{-- 調整顯示大小 --}}
                {{-- <td width="500">{{ $shoplist['describe'] }}</td>
                <td align="center">{{ $shoplist['price'] }}</td>
                <td align="center">{{ $shoplist['quantity'] }}</td>
                <td align="center">{{ $shoplist['state'] }}</td>
                <td>
                    <form action="/api/{{ $shoplist['id'] }}" method="get">
                        <button type="submit" style="width:96px; height:80px;">檢視產品資訊</button>
                    </form>

                    <form action="/api/{{ $shoplist['id'] }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" style="width:96px; height:20px;">刪除</button> --}}
                        {{-- style->改變外觀 --}}
                    {{-- </form>
                </td>
            </tr>
        @endforeach --}}

    {{-- </table> --}}
</body>

</html>
