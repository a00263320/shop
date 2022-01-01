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
        return view ('Shop', ['shop' => Shop::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //新增
    public function create(Requeat $request)
    {
        Shop::create([
            'shop' => $request['input_class'], 
            'name'=>$request['input_name'], 
            'describe'=>$request['input_describe'], 
            'quantity'=>$request['input_quantity'], 
            'price'=>$request['input_price']
        ]);
        return view ('Return.CreatReturn');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //
    public function store(Request $request)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 查看單一商品
    public function show(Request $request)
    {
        // Shop::find($id)->where();
        // ['shop' => shop::all()];
        // return 'show';
        Shop::create([
            'class' => $request['input_class'], 
            'name'=>$request['input_name'], 
            'describe'=>$request['input_describe'], 
            'quantity'=>$request['input_quantity'], 
            'price'=>$request['input_price'],
            'state'=>$request['input_state']
        ]);
        return view ('Return.CreatReturn');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 編輯單一商品
    public function edit($id)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 更新商品
    public function update(Request $request, $id)
    {
        $flight = Shop::find($id);
        SHhop::find($id)->update([
            'shop' => $request['input_class'], ['input_name'], ['input_describe'], ['input_quantity'], ['input_price']
        ]);
        return 'update';
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
        return 'destory';
    }
}
