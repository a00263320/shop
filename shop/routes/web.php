<?php

use Illuminate\Support\Facades\Route;
use App\Models\Shop;
use Facade\FlareClient\View;
use Illuminate\Bus\UpdatedBatchJobCounts;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Database\Schema\PostgresSchemaState;
use PhpParser\Builder\Function_;
use Illuminate\Http\Request;
use Illuminate\View\ViewFinderInterface;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\OperateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::apiResource可以使用以下
//index  store  show  update  destory

//Route::resource可以使用以下
//index  create  store  show  edit  update  destory
Route::resource('api', ApiController::class);

Route::get('/search', [OperateController::class, 'search']);

//state 頁面
Route::get('/state/{id}', [OperateController::class, 'state']);
//state API
Route::post('/stateapi/{id}', [OperateController::class, 'stateapi']);

//price 頁面
Route::get('/pri-qua/{id}', [OperateController::class, 'price']);
//price API
Route::post('/pri-qua/{id}', [OperateController::class, 'priceapi']);
