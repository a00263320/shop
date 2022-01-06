<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style media="screen">
        div {
            display: inline;
        }

    </style>

</head>

<body>

    <div id="accordion-faq" class="collapse-style-1 cillapse-style-4" role="tablist" aria-multiselectable="ture">
    {{-- 使用Bootstrap  card變成卡片式寫法 --}}
    @foreach ($test as $testlist)
    {{-- 使迴圈跑card能夠並排 --}}
    {{-- style="float:left; display:inline" --}}
    <div class="wrap"  style="width:300px; height:600px;float:left; display:inline" >
        <div class="col-sm-6">
            <div class="card" style="width: 18rem; height: 35rem">
                <img src="{{ $testlist['photo'] }}" style="width: 100; height: 230px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" color="red">{{ $testlist['name'] }}</h5>
                    <p class="card-textarea">{{ $testlist['describe'] }}</p>
                    <a href="/api" class="btn btn-primary">檢視產品資訊</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>

    @endforeach
</div>

</body>

</html>

{{-- <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> --}}
