<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class OperateController extends Controller
{
    public function search(Request $request, $search){
        $all = Shop::all()->where('class', '=', '螢幕');
        // $where = $all->where('id', '=', 5);
        // $search = $data->where('like', '%');
        return view('Search', ['search'=>$all]);
    }

    public function state(Request $request, $id){

        return view('Update.State', ['state'=>Shop::find($id)]);
    }

    public function stateapi(Request $request, $id){
        $stateapi = Shop::find($id);
        Shop::find($id)->update([
            'state' => $request['input_state']
        ]);
        return view('Return.State', ['stateapi'=>$stateapi]);
    }

    public function price(Request $request, $id){
        return view('Update.Pri-Qua', ['priqua'=>Shop::find($id)]);
    }

    public function priceapi(Request $request, $id){
        $priceapi = Shop::find($id);
        Shop::find($id)->update([
            'price' => $request['input_price'],
            'quantity' => $request['input_quantity']
        ]);
        return view('Return.Pri-Qua', ['priquaapi'=>$priceapi]);
    }
}
