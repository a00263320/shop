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
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Models\User;

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
//登入頁面
Route::get('/', [UserController::class, 'login']);
//登入 API
Route::post('/login-api', [UserController::class, 'loginapi']);
//新增使用者頁面
Route::get('/sign', [UserController::class, 'sign']);
//新增使用者 API
Route::post('/sign-api', [UserController::class, 'signapi']);

Route::get('/test', [UserController::class, 'test']);
Route::get('/testapi', [UserController::class, 'testapi']);


//Route::apiResource可以使用以下
//index  store  show  update  destory

//Route::resource可以使用以下
//index  create  store  show  edit  update  destory
Route::resource('api', ApiController::class);
//把商店的頁面鎖起來，一定要登入才可以顯示
Route::middleware('auth')->get('/api', function () {
});

//搜尋頁面
Route::get('/search', [ApiController::class, 'index']);

//state 頁面
Route::get('/state/{id}', [ApiController::class, 'state']);
//state API
Route::post('/stateapi/{id}', [ApiController::class, 'stateapi']);

//price 頁面
Route::get('/pri-qua/{id}', [ApiController::class, 'price']);
//price API
Route::post('/pri-qua/{id}', [ApiController::class, 'priceapi']);



Route::get('/test', [TestController::class, 'test']);
