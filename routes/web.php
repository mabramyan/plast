<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}','where' => ['locale' => '[a-zA-Z]{2}'], 
'middleware' => 'setlocale'], function() {

    Route::get('/', [Controller::class,'index'])->name('home');
    // Route::get('/', function () {
    //     return view('home');
    // });


    // Route::get('/home', function () {
    //     return view('home');
    // });
    Route::get('{page}/{subs?}', ['uses' => '\App\Http\Controllers\PageController@index'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);

});

