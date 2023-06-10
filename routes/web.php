<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ServiceController ;

use App\Http\Controllers\Admin\GuideController as CategoryDocumentController;

// Default Route
Route::view('/', 'dashboard');

// Authentication Routes
Route::get('/signup/{role?}', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/loginview', [LoginController::class, 'loginview'])->name('loginview');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('forgot-password', [LoginController::class, 'forgotPwd'])->name('forgot');
Route::get('reset_password', [LoginController::class, 'resetPwd'])->name('reset');
Route::get('reset_pwd', function() { return view('auth.reset'); });
Route::post('update_password', [LoginController::class, 'updatePwd'])->name('password.update');


// Guide Routes
Route::prefix('category_documents')->group(function() {
	Route::get('/', [GuideController::class, 'index'])->name('free_category_documents');
	Route::get('/search', [GuideController::class, 'search'])->name('category_documents_search');
	Route::get('/download/confirm', [GuideController::class, 'download_confirm'])->name('download_confirm');
});

// Main Routes
Route::group(['middleware' => ['auth']], function() {

	Route::view('/mypage', 'mypage.dashboard')->name('dashboard');

	// Item Routes
	Route::prefix('item')->group(function() {
		Route::get('/add/{id}', [ItemController::class, 'add_item'])->name('add_item');
		Route::get('/list/{id}', [ItemController::class, 'list'])->name('item_list');
		Route::get('/item_datatable', [ItemController::class, 'item_datatable'])->name('item_datatable');
		Route::post('/delete', [ItemController::class, 'delete_item'])->name('delete_item');
		Route::post('/save', [ItemController::class, 'save_item'])->name('save_item');
		Route::get('/csv/{id}', [ItemController::class, 'csv_download'])->name('csv');
	});

	// Category Routes
	Route::prefix('category')->group(function() {
		Route::get('/', [CategoryController::class, 'index'])->name('category_list');
		Route::post('/add', [CategoryController::class, 'create'])->name('add_category');
		Route::post('/edit', [CategoryController::class, 'edit'])->name('edit_category');
		Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete_category');
		Route::post('/set/column', [CategoryController::class, 'set_column'])->name('set_column');
		Route::get('/scan/{id}', [CategoryController::class, 'scan'])->name('scan');
		Route::get('/stop/{id}', [CategoryController::class, 'stop'])->name('stop');
		Route::get('/restart/{id}', [CategoryController::class, 'restart'])->name('restart');
		Route::post('/save/{id}', [CategoryController::class, 'save'])->name('save_category');
	});

	Route::prefix('account')->group(function(){
		Route::get('/change_profile', [UserController::class, 'change_profile_view'])->name('change_profile');
		Route::post('/edit_profile', [UserController::class, 'profile_edit']);
		Route::get('/change_email', [UserController::class, 'change_email_view'])->name('change_email');
		Route::post('/edit_email', [UserController::class, 'email_edit']);
		Route::get('/company_profile', [UserController::class, 'company_profile_view'])->name('company_profile');
		Route::post('/edit_company_profile', [UserController::class, 'company_profile_edit']);
	});

	Route::prefix('client')->group(function(){
		Route::get('/dashboard', [ClientController::class, 'index'])->name('client_dashboard');
	});

	Route::view('/noitfy', 'logs.notify')->name('notify_list');
	
	Route::get('/mypage/register_tracking', [MypageController::class, 'register_tracking'])->name('register_tracking');
	Route::get('/mypage/update_tracking', [MypageController::class, 'update_tracking'])->name('update_tracking');
	Route::get('/mypage/shop_list/{id}', [MypageController::class, 'shop_list'])->name('shop_list');
	Route::post('/mypage/get_allitems', [MypageController::class, 'get_allitems'])->name('get_allitems');
	Route::get('/mypage/edit_track', [MypageController::class, 'edit_track'])->name('edit_track');
	Route::get('/mypage/search', [MypageController::class, 'search'])->name('search');
	Route::get('/mypage/individual', [MypageController::class, 'regTrack'])->name('reg');
	Route::get('/mypage/change_percent', [MypageController::class, 'change_percent'])->name('change_percent');
	Route::get('/mypage/set_registering_state', [MypageController::class, 'set_state'])->name('set_state');
	Route::get('/mypage/get_registering_state', [MypageController::class, 'get_state'])->name('get_state');
	Route::get('/mypage/save_name_index', [MypageController::class, 'save_name_index'])->name('save_name_index');

	// register yahoo and amazon token
	Route::post('/mypage/register_yahoo', [MypageController::class, 'register_yahoo'])->name('register_yahoo');
	Route::post('/mypage/register_amazon', [MypageController::class, 'register_amazon'])->name('register_amazon');
	Route::post('/mypage/register_exhibition', [MypageController::class, 'register_exhibition'])->name('register_exhibition');

	// send a alert message to the client with eamil
	Route::get('/mypage/update_alert', [MypageController::class, 'updateAlert'])->name('alert');
	
	//download zip file
	Route::get('/mypage/ext_download', [MypageController::class, 'extDownload'])->name('extDownload');

	//submited reviews
	Route::view('/mypage/reputation_answers', 'mypage.review')->name('reputation_answers');
	// Route::get('/mypage/reputation_answers', [MypageController::class, 'reputation_answers'])->name('reputation_answers');
	
	//requested materials
	Route::view('/mypage/requested_materials', 'mypage.download')->name('requested_materials');

	Route::view('/custom', 'layouts.main');
});

// Admin Routes
Route::group(['middleware' => ['auth', 'admin']], function() {
	Route::prefix('admin')->group(function() {

		Route::get('/account', [AdminController::class, 'list_account'])->name('list_account');

		Route::get('/delete', [AdminController::class, 'delete_account'])->name('delete_account');

		Route::get('/permit', [AdminController::class, 'permit_account'])->name('permit_account');

		Route::prefix('/category_documents')->group(function(){
			Route::get('/', [CategoryDocumentController::class, 'index'])->name('category_documents_list');
			Route::get('/delete/{id}', [CategoryDocumentController::class, 'delete'])->name('delete_category_documents');
			Route::get('/add', [CategoryDocumentController::class, 'create'])->name('add_category_document');
			Route::post('/store', [CategoryDocumentController::class, 'store'])->name('store_category_document');
		});
	});

});

Route::group(['middleware' => ['auth', 'client']], function() {
	Route::prefix('client')->group(function() {
		Route::prefix('/services')->group(function(){
			Route::get('/', [ServiceController::class, 'index'])->name('service_list');
			Route::get('/delete/{id}', [ServiceController::class, 'delete'])->name('delete_service');
			Route::get('/add', [ServiceController::class, 'create'])->name('add_service');
			Route::post('/store', [ServiceController::class, 'store'])->name('store_service');
		});
	});

});

Route::middleware(['cors'])->group(function () {
    Route::get('http://localhost:32768/');
});