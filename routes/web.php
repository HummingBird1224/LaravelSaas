<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\LoginWithFacebookController;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DocumentDownController;

use App\Http\Controllers\Admin\GuideController as CategoryDocumentController;

// Default Route
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::view('/top', 'top')				->name('top_lp');
// Route::view('/web', 'web')				->name('web_lp');
// Route::view('/servicer', 'servicer')	->name('servicer_lp');
// Route::view('/komon', 'komon')			->name('komon_lp');

// Authentication Routes
Route::get('/signup/{role?}', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/loginview', [LoginController::class, 'loginview'])->name('loginview');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [LoginController::class, 'forgotPwd'])->name('forgot');
Route::post('/forgot_email', [LoginController::class, 'forgot_email'])->name('forgot_email');
Route::get('/reset_password', [LoginController::class, 'resetPwd'])->name('reset');
Route::get('/reset_pwd', function() { return view('auth.reset'); });
Route::post('/update_password', [LoginController::class, 'updatePwd'])->name('password.update');

// google login
Route::get('/authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('/authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

// facebook login
Route::get('/redirect', [LoginWithFacebookController::class, 'redirectFacebook']);
Route::get('/callback', [LoginWithFacebookController::class, 'facebookCallback']);

//Category Routes
Route::get('/lc/{id}',[CategoryController::class,'lc_view'])->name('lc_view');
Route::get('/issues',[CategoryController::class,'issues'])->name('issues');
Route::prefix('categories')->group(function(){
	Route::get('/', [CategoryController::class, 'index'])->name('categories');
	Route::get('/{id}', [CategoryController::class, 'show'])->name('category_view');
});

// Guide Routes
Route::prefix('category_documents')->group(function() {
	Route::get('/', [GuideController::class, 'index'])->name('category_documents');
	Route::get('/search', [GuideController::class, 'search'])->name('category_documents_search');	
});


// Route::get('/downloads/confirm', [GuideController::class, 'download_confirm'])->name('download_confirm');

//Service Routes
Route::get('/services/{id}',[ServiceController::class,'show'])->name('service_view');
Route::get('/services/{id}/reviews',[ServiceController::class,'service_reviews'])->name('service_reviews');
Route::get('/services/{service_id}/reviews/{review_id}',[ReviewController::class,'show'])->name('review_view');




Route::get('/categories/{parent}/{id}',[CategoryController::class, 'categories_by_parent'])->name('categories_by_parent');
// Route::get('/issue/categories/{id}',[CategoryController::class, 'categories_by_issue'])->name('categories_by_issue');



// Main Routes
Route::group(['middleware' => ['auth']], function() {
	
	Route::prefix('downloads')->group(function(){
		Route::get('/confirm', [GuideController::class, 'download_confirm'])->name('download_confirm');
		Route::get('/service_add/{id}', [GuideController::class, 'service_add'])->name('download_service_add');
	});

	Route::post('/downloads/post_mail', [DocumentDownController::class, 'post_mail'])->name('post_mail');

	Route::prefix('mypage')->group(function(){
		Route::get('/', [MypageController::class, 'index'])->name('mypage');
		Route::get('/reputation_answers',[ReviewController::class, 'repuation_answers'] )->name('reputation_answers');
		Route::get('/requested_materials', [ServiceController::class, 'requested_materials'])->name('requested_materials');
	});
	

	// Item Routes
	// Route::prefix('item')->group(function() {
	// 	Route::get('/add/{id}', [ItemController::class, 'add_item'])->name('add_item');
	// 	Route::get('/list/{id}', [ItemController::class, 'list'])->name('item_list');
	// 	Route::get('/item_datatable', [ItemController::class, 'item_datatable'])->name('item_datatable');
	// 	Route::post('/delete', [ItemController::class, 'delete_item'])->name('delete_item');
	// 	Route::post('/save', [ItemController::class, 'save_item'])->name('save_item');
	// 	Route::get('/csv/{id}', [ItemController::class, 'csv_download'])->name('csv');
	// });

	// Category Routes
	// Route::prefix('category')->group(function() {
	// 	Route::get('/', [CategoryController::class, 'index'])->name('category_list');
	// 	Route::post('/add', [CategoryController::class, 'create'])->name('add_category');
	// 	Route::post('/edit', [CategoryController::class, 'edit'])->name('edit_category');
	// 	Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete_category');
	// 	Route::post('/set/column', [CategoryController::class, 'set_column'])->name('set_column');
	// 	Route::get('/scan/{id}', [CategoryController::class, 'scan'])->name('scan');
	// 	Route::get('/stop/{id}', [CategoryController::class, 'stop'])->name('stop');
	// 	Route::get('/restart/{id}', [CategoryController::class, 'restart'])->name('restart');
	// 	Route::post('/save/{id}', [CategoryController::class, 'save'])->name('save_category');
	// });

	Route::prefix('account')->group(function(){
		Route::get('/change_profile', [UserController::class, 'change_profile_view'])->name('change_profile');
		Route::post('/edit_profile', [UserController::class, 'profile_edit']);
		Route::get('/change_email', [UserController::class, 'change_email_view'])->name('change_email');
		Route::post('/edit_email', [UserController::class, 'email_edit']);
		Route::get('/company_profile', [UserController::class, 'company_profile_view'])->name('company_profile');
		Route::post('/edit_company_profile', [UserController::class, 'company_profile_edit']);
	});

	// Route::view('/noitfy', 'logs.notify')->name('notify_list');
	
	// Route::get('/mypage/register_tracking', [MypageController::class, 'register_tracking'])->name('register_tracking');
	// Route::get('/mypage/update_tracking', [MypageController::class, 'update_tracking'])->name('update_tracking');
	// Route::get('/mypage/shop_list/{id}', [MypageController::class, 'shop_list'])->name('shop_list');
	// Route::post('/mypage/get_allitems', [MypageController::class, 'get_allitems'])->name('get_allitems');
	// Route::get('/mypage/edit_track', [MypageController::class, 'edit_track'])->name('edit_track');
	// Route::get('/mypage/search', [MypageController::class, 'search'])->name('search');
	// Route::get('/mypage/individual', [MypageController::class, 'regTrack'])->name('reg');
	// Route::get('/mypage/change_percent', [MypageController::class, 'change_percent'])->name('change_percent');
	// Route::get('/mypage/set_registering_state', [MypageController::class, 'set_state'])->name('set_state');
	// Route::get('/mypage/get_registering_state', [MypageController::class, 'get_state'])->name('get_state');
	// Route::get('/mypage/save_name_index', [MypageController::class, 'save_name_index'])->name('save_name_index');

	// // register yahoo and amazon token
	// Route::post('/mypage/register_yahoo', [MypageController::class, 'register_yahoo'])->name('register_yahoo');
	// Route::post('/mypage/register_amazon', [MypageController::class, 'register_amazon'])->name('register_amazon');
	// Route::post('/mypage/register_exhibition', [MypageController::class, 'register_exhibition'])->name('register_exhibition');

	// // send a alert message to the client with eamil
	// Route::get('/mypage/update_alert', [MypageController::class, 'updateAlert'])->name('alert');
	
	// //download zip file
	// Route::get('/mypage/ext_download', [MypageController::class, 'extDownload'])->name('extDownload');

	// Route::view('/custom', 'layouts.main');
});

// Admin Routes
Route::group(['middleware' => ['auth', 'admin']], function() {
	Route::prefix('admin')->group(function() {
		Route::get('/client_permit/{id}', [UserController::class, 'client_permit'])->name('client_permit');
		Route::post('/client_reject/{id}', [UserController::class, 'client_reject'])->name('client_reject');

		Route::post('/review_permit', [ReviewController::class, 'review_permit'])->name('review_permit');
		Route::post('/review_reject', [ReviewController::class, 'review_reject'])->name('review_reject');

		Route::prefix('/category_documents')->group(function(){
			Route::get('/', [GuideController::class, 'guide_list'])->name('category_documents_list');
			Route::get('/delete/{id}', [CategoryDocumentController::class, 'delete'])->name('delete_category_documents');
			Route::get('/add', [CategoryDocumentController::class, 'create'])->name('add_category_document');
			Route::post('/store', [CategoryDocumentController::class, 'store'])->name('store_category_document');
		});

		Route::get('/service_activities', [ServiceController::class, 'service_activities'])->name('admin_service_activities');
		Route::get('/category_issues', [CategoryController::class, 'category_issues'])->name('admin_category_issues');
		Route::get('/service_managing', [ServiceController::class, 'service_managing'])->name('admin_service_managing');
		Route::get('/client_managing', [UserController::class, 'client_managing'])->name('admin_client_managing');
		Route::get('/review_managing', [ReviewController::class, 'review_managing'])->name('admin_review_managing');

		Route::post('/lc_edit', [CategoryController::class, 'lc_edit'])->name('lc_edit');
		Route::post('/issue_edit', [CategoryController::class, 'issue_edit'])->name('issue_edit');
		Route::post('/category_add', [CategoryController::class, 'create'])->name('category_add');
		Route::post('/category_edit', [CategoryController::class, 'edit'])->name('category_edit');

		Route::get('/user_list', [UserController::class, 'user_list'])->name('user_list');
		Route::get('/user_profile/{id}', [UserController::class, 'show_profile'])->name('show_user_profile');
		Route::post('/change_user_profile', [UserController::class, 'change_profile'])->name('change_user_profile');
		Route::get('/add_new_user', [UserController::class, 'add_new_user'])->name('add_new_user');
		Route::post('/add_user_profile', [UserController::class, 'add_user_profile'])->name('add_user_profile');
		Route::get('/client_register', [UserController::class, 'client_register'])->name('client_register');
	});

});

Route::group(['middleware' => ['auth', 'client']], function() {

	Route::prefix('client')->group(function() {
		Route::get('/client_tools', [ClientController::class, 'client_tools'])->name('client_tools');
		Route::get('/client_reports', [ClientController::class, 'client_reports'])->name('client_reports');
		Route::get('/client_invalid_condition', [ClientController::class, 'client_invalid_condition'])->name('client_invalid_condition');
		Route::get('/client_account_change', [ClientController::class, 'client_account_change'])->name('client_account_change');

		Route::prefix('/services')->group(function(){
			Route::get('/', [ServiceController::class, 'index'])->name('service_list');
			Route::get('/delete/{id}', [ServiceController::class, 'delete'])->name('delete_service');
			Route::get('/add', [ServiceController::class, 'add'])->name('add_service');
			Route::post('/store', [ServiceController::class, 'store'])->name('store_service');
			// Route::post('/store', [ServiceController::class, 'store'])->name('store_service');
		});
	});
		
	Route::prefix('reviews')->group(function(){
		Route::get('/add/{service_id}',[ReviewController::class, 'add'])->name('add_review');
		Route::post('/create', [ReviewController::class, 'create'])->name('create_review');
		Route::get('/delete/{id}',[ReviewController::class, 'destroy'] )->name('delete_review');
	});

});

Route::middleware(['cors'])->group(function () {
    Route::get('http://localhost:32768/');
});

// TODO...