<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //總頁面
    public function index(Request $request)
    {
        //where放在get()或是all()後面就是方法  會報錯
        //where放在前面就是一ㄍ尋找迴圈
        //where後面一訂要加get   要不然會整個資料庫在找資料
        //like 後面的字串前後要加%  .  . 是連接字串的用法
        if ($request['keyword']) {
            $shop = Shop::where('class', 'like', '%' . $request['keyword'] . '%')
                //orwhere  或者甚麼的搜尋
                ->orwhere('name', 'like', '%' . $request['keyword'] . '%')
                ->orwhere('price', 'like', '%' . $request['keyword'] . '%')
                ->orwhere('quantity', 'like', '%' . $request['keyword'] . '%')
                ->orwhere('state', 'like', '%' . $request['keyword'] . '%')
                ->get();
        }else{
            $shop = Shop::all();
        }

        return view('ShopPage.Shop-index', ['shop'=>$shop]);
        // return view('ShopPage.Shop-index', ['shop' => Shop::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //新增產品頁面
    public function create(Request $request)
    {
        return view('CRUD.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //新增產品的API
    public function store(Request $request)
    {
        Shop::create([
            'class' => $request['input_class'],
            'name' => $request['input_name'],
            'photo' => $request['input_photo'],
            'describe' => $request['input_describe'],
            'quantity' => $request['input_quantity'],
            'price' => $request['input_price'],
            'state' => $request['input_state']
        ]);
        return view('Return.CreatReturn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 查看單一商品   不可以使用迴圈  因為只有單一資料
    public function show($id)
    {
        //給一個字定義參數取得單筆資料陣列
        $show = Shop::find($id);

        //定義一個參數給前端用=>上方自訂一參數
        return view('ShopPage.Shop-show', ['show' => $show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 編輯單一商品   (更新產品頁頁面)
    public function edit($id)
    {
        $showup = Shop::find($id);

        return view('CRUD.Update', ['showup' => $showup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 更新商品 API
    public function update(Request $request, $id)
    {
        $reup = Shop::find($id);
        Shop::find($id)->update([
            'photo' => $request['input_photo'],
            'class' => $request['input_class'],
            'name' => $request['input_name'],
            'describe' => $request['input_describe'],
            'quantity' => $request['input_quantity'],
            'price' => $request['input_price'],
            'state' => $request['input_state']
        ]);
        return view('Return.Update', ['reup' => $reup]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 刪除商品
    public function destroy($id)
    {
        $flight = Shop::find($id)->delete();
        return view('Return.Delete');
    }


    public function search(Request $request)
    {

    }

    public function state(Request $request, $id)
    {

        return view('Update.State', ['state' => Shop::find($id)]);
    }

    public function stateapi(Request $request, $id)
    {
        $stateapi = Shop::find($id);
        Shop::find($id)->update([
            'state' => $request['input_state']
        ]);
        return view('Return.State', ['stateapi' => $stateapi]);
    }

    public function price(Request $request, $id)
    {
        return view('Update.Pri-Qua', ['priqua' => Shop::find($id)]);
    }

    public function priceapi(Request $request, $id)
    {
        $priceapi = Shop::find($id);
        Shop::find($id)->update([
            'price' => $request['input_price'],
            'quantity' => $request['input_quantity']
        ]);
        return view('Return.Pri-Qua', ['priquaapi' => $priceapi]);
    }
}
