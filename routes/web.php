<?php

use App\Http\Controllers\admin\auth\LoginController;
use App\Http\Controllers\admin\auth\SocialAuthController;
use App\Http\Controllers\admin\image\ImageController;
use App\Http\Controllers\admin\brand\BrandController;
use App\Http\Controllers\admin\category\CategoryController;
use App\Http\Controllers\admin\product\ProductController;
use App\Http\Controllers\admin\role\RoleController;
use App\Http\Controllers\admin\user\UserController;
use App\Http\Controllers\admin\variant\VariantController;
use App\Http\Controllers\user\contact\ContactController;
use App\Http\Controllers\user\home\HomeController;
use App\Http\Controllers\user\shop\ShopController;
use FontLib\Table\Type\name;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', HomeController::class)->name('user.home.index');

Route::get('/sing-in', [LoginController::class, 'index'])->name('login');

Route::get('/presume-style/shop', [ShopController::class, 'index'])->name('user.shop.index');
Route::get('/presume-style/show/{product}', [ShopController::class , 'show'])->name('user.shop.show');

Route::get('/presume-style/contact', ContactController::class)->name('user.contact.index');


//auth con google
Route::get('/auth/google', [SocialAuthController::class ,'redirectToGoogle'])->name('google.auth.redirect');
Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback'])->name('google.auth.callback');


//rutas admin
Route::get('/presume-style/admin/product', [ProductController::class , 'index'])->name('admin.product.index');
Route::get('/presumestyle/admin/create/product', [ProductController::class , 'create'])->name('admin.product.create');
Route::post('/presumestyle/admin/store/product', [ProductController::class , 'store'])->name('admin.product.store');
Route::get('/presumestyle/admin/edit/{product}', [ProductController::class , 'edit'])->name('admin.product.edit');
Route::put('/presumestyle/admin/update/{product}', [ProductController::class , 'update'])->name('admin.update.edit');


Route::get('/presumestyle/admin/create/variant/{product}', [VariantController::class , 'index'])->name('admin.variant.index');
Route::get('/presumestyle/admin/create/image/{product}', [ImageController::class, 'index'])->name('admin.image.index');


Route::get('/presumestyle/admin/index/brand', [BrandController::class , 'index'])->name('admin.brand.index');
Route::get('/presumestyle/admin/index/category', [CategoryController::class, 'index'])->name('admin.category.index');



Route::get('/presumestyle/user/index', [UserController::class, 'index'])->name('admin.user.index');
Route::get('/instructor/user/edit/{user}', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('/instructor/user/update/{user}', [UserController::class, 'update'])->name('admin.user.update');




/**RUTA PARA LOS ROLES Y PERMISOS */
Route::get('/presumestyle/admin/role', [RoleController::class, 'index'])->name('admin.roles.index');
Route::get('/presumestyle/admin/permisos/create', [RoleController::class, 'create'])->name('admin.permissions.create');
Route::post('/presumestyle/admin/permisos/store', [RoleController::class, 'store'])->name('admin.permissions.store');
Route::put('/presumestyle/admin/role/update/{role}', [RoleController::class, 'update'])->name('admin.permissions.update');
Route::get('/presumestyle/admin/role/edit/{role}', [RoleController::class, 'edit'])->name('admin.roles.edit');
Route::delete('/presumestyle/admin/role/destroy/{role}', [RoleController::class, 'destroy'])->name('admin.roles.destroy');


