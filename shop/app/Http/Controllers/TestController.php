<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test($id){
        $shop = Shop::find($id);
        $class = Shop::where('class', '滑鼠')->first('class');
        $class1 = $class['class'];

        // return view('test', ['shop' => $test]);

        return view('test', ['shop'=>$shop], ['class'=>$class1]);
    }
}
