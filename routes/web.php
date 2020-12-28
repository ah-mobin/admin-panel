<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontent\PageController;
use App\Http\Controllers\Backend\HomePageController;
/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
|
*/

Route::get('/',[PageController::class,'index'])->name('front.index');
Route::get('/news',[PageController::class,'news'])->name('front.news');
Route::get('/activities',[PageController::class,'activities'])->name('front.activities');
Route::get('/founding-team',[PageController::class,'foundersCommittee'])->name('front.founders');
Route::get('/executive-committe',[PageController::class,'executivesCommittee'])->name('front.executives');
Route::get('/regional-committe',[PageController::class,'regionalsCommittee'])->name('front.regionals');
Route::get('/donation',[PageController::class,'donation'])->name('front.donation');
Route::get('/cloud-investment',[PageController::class,'investment'])->name('front.investment');
Route::get('/notices',[PageController::class,'notice'])->name('front.notice');
Route::get('/one-stop-service',[PageController::class,'oneStopService'])->name('front.service');



/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
|
*/


Route::get('/admin', function () {
    return view('backend.pages.dashboard');
});


Route::get('sliders', [HomePageController::class,'sliders'])->name('sliders');
Route::post('slider-added', [HomePageController::class,'sliderAdded'])->name('added.slider');
Route::get('slider/edit/{id}', [HomePageController::class,'sliderEdit']);
Route::post('update/slider/{id}', [HomePageController::class,'sliderUpdate']);

Route::get('galleries', [HomePageController::class,'galleries'])->name('galleries');