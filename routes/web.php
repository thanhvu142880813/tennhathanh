<?php

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
use App\categories;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('home',function(){
//	return view('client.index');
//})->name('index');
//admin_trangchu
Route::get('admin',function(){
	return view('admin.trangchu.trangchu');
})->name('admin.index');
//loaibien
Route::get('danh_sach_loai_bien_bao',function(){
	return view('admin.loai_bien.dsachloaibien');
})->name('danhsachloaihbienbao');
Route::get('them_loai_bien_bao',function(){
	return view('admin.loai_bien.themloaibienbao');
})->name('themloaibienbao');
Route::get('sua_loai_bien_bao',function(){
	return view('admin.bien_bao.sualoaibienbao');
})->name('sualoaibienbao');

//bienbao
Route::get('danh_sach_bien_bao', 'SignalController@index')->name('danhsachbienbao');
Route::get('them_bien_bao',function(){
	return view('admin.bien_bao.thembienbao');
})->name('thembienbao');
Route::get('sua_bien_bao',function(){
	return view('admin.bien_bao.suauser');
})->name('suabienbao');
//user
Route::get('danh_sach_user',function(){
	return view('admin.user.dsachuser');
})->name('danhsachuser');
Route::get('them_user',function(){
	return view('admin.user.themuser');
})->name('themuser');
Route::get('sua_user',function(){
	return view('admin.user.suauser');
})->name('suauser');
Route::get('dangnhap_admin',function(){
	return view('admin.login');
})->name('adminlogin');


//chức năng 
//đăng nhập
Route::get('admin/dangnhap','usercontroller@getdangnhapadmin');
Route::post('admin/dangnhap','usercontroller@postdangnhapadmin')->name('dangnhap');

Route::group(['prefix'=>'admin'],function(){
	//loaibienbao
	Route::group(['prefix'=>'loaibien'],function(){
		Route::get('dsachloaibien','loaibiencontroller@index');
		Route::get('xoaloaibien/{id}','loaibiencontroller@getxoa');		
		Route::get('sualoaibien/{id}','loaibiencontroller@getsua');
		Route::post('sualoaibien/{id}','loaibiencontroller@postsua')->name('sualoaibien');
		Route::get('themloaibien','loaibiencontroller@getthem');
	});
	//user
	Route::group(['prefix'=>'user'],function(){
		Route::get('dsachuser','usercontroller@index')->name('dsachuser');
		Route::get('themuser','usercontroller@getthem');
		Route::post('themuser','usercontroller@postthem')->name('themuser');
		Route::post('xoauser/{id}','usercontroller@xoauser')->name('xoauser');
	});
	//bienbao
	Route::group(['prefix'=>'bienbao'],function(){
		Route::get('dsachbienbao','SignalController@index');
		Route::get('xoabienbao/{id}','SignalController@destroy');		
		Route::get('suabienbao/{id}','SignalController@edit');
		Route::post('suabienbao/{id}','SignalController@update')->name('suabienbao');
		Route::get('thembienbao','SignalController@create');
	});
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
