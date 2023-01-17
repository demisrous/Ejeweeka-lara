<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [ PagesController::class, "mainPage" ]);

Route::get('contact', function () {
    return view('contact');
})->name('contact');

# Route::view('/test', 'test', []);
# Route::redirect('/old-page', '/new-page', 301);

/*Route::get('/product/{id}/{slug}', function ($id, $slug) {
    return "Product {$id} | {$slug}";
})->where([
    'id' => '[0-9]+',
    'slug' => '[A-Za-z0-9-]+'
]);*/

Route::get('/product/{id}/{slug}', function ($id, $slug) {
    return "Product {$id} | {$slug}";
});
