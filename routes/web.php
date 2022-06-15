<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonyController;



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



Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    /* corporate routes */
    //testimonies routes
    Route::get('/testimonies',[TestimonyController::class,'getTestimonies'] );
    Route::post('/add-testimony',[TestimonyController::class,'addTestimony']);
    Route::get('/delete-testimony/{testimony}',[TestimonyController::class,'deleteTestimony']);

    //gallery routes
    Route::get('/admgallery',[GalleryController::class,'getGalleryImages']);
    Route::post('/add-gallery-image',[GalleryController::class,'addGalleryImage']);
    Route::get('/delete-gallery-image/{gallery}',[GalleryController::class,'deleteGalleryImage']);

    Route::get('/weekly-programme', function(){ return view('admin-dashboard.weekly-programme'); });
    Route::get('/mission', function(){ return view('admin-dashboard.missions'); });
    Route::get('/projects', function(){ return view('admin-dashboard.projects'); });
    Route::get('/admcommunication', function(){ return view('admin-dashboard.communication'); });
    Route::get('/members', function(){ return view('admin-dashboard.members'); });
    Route::get('/admin', function(){ return view('admin-dashboard.admin'); });

});


// front-end routes
Route::get('/', function () { return view('index'); });
Route::get('/about', [TestimonyController::class,'getTestimoniesForAboutPage']);
Route::get('/about2', function(){ return view('about2'); });
Route::get('/blog-single', function(){ return view('blog-single'); });
Route::get('/blog', function(){ return view('blog'); });
Route::get('/churchinfo', function(){ return view('churchinfo'); });
Route::get('/communication', function(){ return view('communication'); });
Route::get('/contact', function(){ return view('contact'); });
Route::get('/gallery',[GalleryController::class,'getImagesForGalleryPage']);
Route::get('/index', function(){ return view('index'); });
Route::get('/literature', function(){ return view('literature'); });
Route::get('/portfolio-details', function(){ return view('portfolio-details'); });
Route::get('/video-page', function(){ return view('video-page'); });
Route::get('/clerk', function(){ return view('clerk'); });
























