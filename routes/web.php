<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/TS' , function (){
    return view('Front.index.Test');
   /*return \Database\Factories\AddressFactorFactory::new()->count(5)->make();*/
});
Route::get('/',[App\Http\Controllers\IndexHomeController::class,'index'])->name('HomePage');
Route::get('/News/{CityA}',[App\Http\Controllers\IndexHomeController::class,'SelectCity'])->name('SelectCity');
Route::get('/View/New/{City}/{Item}',[App\Http\Controllers\IndexHomeController::class,'ViewNewItem'])->name('ViewNewItem');
Route::post('/Search/News',[App\Http\Controllers\IndexHomeController::class,'SearchNews'])->name('SearchNews');
Route::get('/View/Menu/{City}/{ParentMenu}',[App\Http\Controllers\IndexHomeController::class,'ViewMenuItemRight'])->name('ViewMenuItemRight');
Route::post('/View/Address/',[App\Http\Controllers\IndexHomeController::class,'ViewAddressItemRight'])->name('ViewAddressItemRight');
Route::post('/View/Price/',[App\Http\Controllers\IndexHomeController::class,'ViewPriceItemRight'])->name('ViewPriceItemRight');
Route::get('/View/News/One/{CityA}/{name}',[App\Http\Controllers\IndexHomeController::class,'ViewNewOne'])->name('ViewNewOne');
Route::get('/New/News/User/{CityA}',[App\Http\Controllers\NewsNewController::class,'NewNewsUser'])->name('NewNewsUser')->middleware('auth');
Route::post('/Select/Filter/News',[App\Http\Controllers\IndexHomeController::class,'SelectFilterNews'])->name('SelectFilterNews');
Route::get('/View/Chat/{CityA}',[App\Http\Controllers\CommentsController::class,'ViewChat'])->name('ViewChat')->middleware(['auth','mobile']);
Route::get('/New/Chat/{CityA}/{Mobile}/{id}',[App\Http\Controllers\CommentsController::class,'NewChat'])->name('NewChat')->middleware(['auth','mobile']);
Route::get('/View/Chat/One/{id}/{CityA}/{Mobile}',[App\Http\Controllers\CommentsController::class,'ViewChatOne'])->name('ViewChatOne')->middleware(['auth','mobile']);
Route::post('/New/Pm',[App\Http\Controllers\CommentsController::class,'NewPmChat'])->name('NewPmChat')->middleware(['auth','mobile']);
Route::get('/Err/Mobile',[App\Http\Controllers\IndexHomeController::class,'ErrMobile'])->name('ErrMobile')->middleware('auth');
Route::get('/New/User/Google',[App\Http\Controllers\GoogleAuthController::class,'redirectToProvider'])->name('redirectToProvider');
Route::get('/Call/Bake/User/Google',[App\Http\Controllers\GoogleAuthController::class,'handleProviderCallback'])->name('handleProviderCallback');
Route::post('/New/News/Lv1',[App\Http\Controllers\NewsNewController::class,'NewNewsLv1'])->name('NewNewsLv1')->middleware(['mobile','auth']);
Route::post('/New/News/Lv1/Save',[App\Http\Controllers\NewsNewController::class,'NewNewsLv1Save'])->name('NewNewsLv1Save')->middleware(['mobile','auth']);
Route::post('/New/News/Lv2/Save',[App\Http\Controllers\NewsNewController::class,'NewNewsLv2Save'])->name('NewNewsLv2Save')->middleware(['mobile','auth']);
Route::post('/New/News/Lv3',[App\Http\Controllers\NewsNewController::class,'NewNewsLv3'])->name('NewNewsLv3')->middleware(['auth']);
Route::post('/New/News/Lv3/Save',[App\Http\Controllers\NewsNewController::class,'NewNewsLv3Save'])->name('NewNewsLv3Save')->middleware(['mobile','auth']);
Route::post('/New/News/Lv4/Save',[App\Http\Controllers\NewsNewController::class,'NewNewsLv4Save'])->name('NewNewsLv4Save')->middleware(['mobile','auth']);
//========================== test
Route::get('/test',[App\Http\Controllers\TestController::class,'test'])->name('builderInterface');
Route::post('/test/form',[App\Http\Controllers\TestController::class,'test_form'])->name('test_form');

//========================== test


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
