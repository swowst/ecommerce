<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [\App\Http\Controllers\SiteController::class, 'homePage'])->name('homepage');
Route::get('category-view', [\App\Http\Controllers\SiteController::class, 'categoryView'])->name('categoryView');
Route::get('category-view-women', [\App\Http\Controllers\SiteController::class, 'categoryViewWomen'])->name('categoryViewWomen');





Route::get('admin/login',[\App\Http\Controllers\Admin\AdminController::class, 'loginView'])->name('admin.login.view');
Route::post('admin/login',[\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.login');
Route::get('/category/{slug}', [\App\Http\Controllers\SiteController::class, 'category'])->name('category-slug');
Route::get('detail/{productId}', [\App\Http\Controllers\SiteController::class, 'detail'])->name('detail-view');
Route::get('shop/', [\App\Http\Controllers\SiteController::class, 'shop'])->name('shop-view');
Route::get('contact/', [\App\Http\Controllers\SiteController::class, 'contact'])->name('contact-view');
Route::get('blog/', [\App\Http\Controllers\SiteController::class, 'blog'])->name('blog-view');
Route::get('blog-detail/{blogId}', [\App\Http\Controllers\SiteController::class, 'blogDetail'])->name('blog-detail-view');
Route::get('basket/', [\App\Http\Controllers\BasketController::class, 'basket'])->name('basket-view');
Route::post('basket/', [\App\Http\Controllers\BasketController::class, 'addToBasket'])->name('add-to-basket');
Route::get('basket-delete/{id}', [\App\Http\Controllers\BasketController::class, 'deleteFromBasket'])->name('delete-from-basket');






Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function (){
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
    Route::get('/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');
    Route::resource('translations', \App\Http\Controllers\Admin\TranslationControler::class)->except('show');
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class)->except('show');
    Route::resource('product', \App\Http\Controllers\Admin\ProductController::class)->except('show');
    Route::resource('product-image', \App\Http\Controllers\Admin\ProductImageController::class)->except('show', 'index', 'create');
    Route::get('product-image/{productId}',[\App\Http\Controllers\Admin\ProductImageController::class, 'index'])->name('product-image.index');
    Route::get('product-image/create/{productId}',[\App\Http\Controllers\Admin\ProductImageController::class, 'create'])->name('product-image.create');
    Route::post('sort-product-image',[\App\Http\Controllers\Admin\ProductImageController::class, 'sortProductImage'])->name('sort-product-image');
    Route::resource('attribute', \App\Http\Controllers\Admin\AttributeController::class)->except('show');
    Route::get('attributes-by-category/{category}/{productId?}',[\App\Http\Controllers\Admin\AttributeController::class, 'getAttributesByCategory'])->name('attributes-by-category');
    Route::resource('attribute-value', \App\Http\Controllers\Admin\AttributeValueController::class)->except('show','index','create');
    Route::get('attribute-value/{attribute}', [\App\Http\Controllers\Admin\AttributeValueController::class, 'index'])->name('attribute-value.index');
    Route::get('attribute-value/create/{attribute}', [\App\Http\Controllers\Admin\AttributeValueController::class, 'create'])->name('attribute-value.create');
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class)->except('show');
    Route::resource('hero', \App\Http\Controllers\Admin\HeroController::class)->except('show');
    Route::resource('menu', \App\Http\Controllers\Admin\MenuController::class)->except('show');




});
