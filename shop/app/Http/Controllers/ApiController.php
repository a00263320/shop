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
    public function index()
    {
        return view ('ShopPage.Shop-index', ['shop' => Shop::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //新增產品頁面
    public function create(Request $request)
    {
        return view ('CRUD.Create');
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
            'class'=>$request['input_class'],
            'name'=>$request['input_name'],
            'photo' => $request['input_photo'],
            'describe'=>$request['input_describe'],
            'quantity'=>$request['input_quantity'],
            'price'=>$request['input_price'],
            'state'=>$request['input_state']
        ]);
        return view ('Return.CreatReturn');
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

        return view('CRUD.Update', ['showup'=>$showup]);
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
        return view('Return.Update', ['reup'=>$reup]);
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
        return view ('Return.Delete');
    }
}
