<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontent\PageController;
use App\Http\Controllers\Backend\HomePageController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\VisionMissionController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\ExecutiveCommitteePageController;
use App\Http\Controllers\Backend\AdvisorCommitteeController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\QuoteController;

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
|
*/

Route::get('/',[PageController::class,'index'])->name('front.index');
Route::get('/news',[PageController::class,'news'])->name('front.news');
Route::get('/news-details/{slug}',[PageController::class,'newsDetails']);
Route::get('/activities',[PageController::class,'activities'])->name('front.activities');
Route::get('/founding-team',[PageController::class,'foundersCommittee'])->name('front.founders');
Route::get('/executive-committe',[PageController::class,'executivesCommittee'])->name('front.executives');
Route::get('/advisory-committe',[PageController::class,'advisoryCommittee'])->name('front.advisories');
Route::get('/regional-committe',[PageController::class,'regionalsCommittee'])->name('front.regionals');
Route::get('/donation',[PageController::class,'donation'])->name('front.donation');
Route::get('/cloud-investment',[PageController::class,'investment'])->name('front.investment');
Route::get('/notices',[PageController::class,'notice'])->name('front.notice');
Route::get('/one-stop-service',[PageController::class,'oneStopService'])->name('front.service');
Route::get('/member-login',[PageController::class,'login'])->name('front.login');
Route::get('/join-with-us',[PageController::class,'joinWithUs'])->name('front.join_us');
Route::post('member-joined', [MemberController::class,'memberRegister'])->name('member.joined');

Route::get('contact-us', [PageController::class,'contactUs'])->name('front.contact');
Route::post('contact-us', [PageController::class,'contactMessageStore'])->name('submit.message');

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
|
*/

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth'])->name('dashboard');


/// home page

//slider
Route::get('sliders', [HomePageController::class,'sliders'])->name('sliders');
Route::post('slider-added', [HomePageController::class,'sliderAdded'])->name('added.slider');
Route::get('slider/edit/{id}', [HomePageController::class,'sliderEdit']);
Route::post('update/slider/{id}', [HomePageController::class,'sliderUpdate']);

//about
Route::get('/about-section',[AboutController::class,'index'])->name('abouts');
Route::post('/store-about',[AboutController::class,'store'])->name('store.about');
Route::get('/about/edit/{id}',[AboutController::class,'edit']);
Route::post('/update/about/{id}',[AboutController::class,'update']);


//about
Route::get('/vision-mission-section',[VisionMissionController::class,'index'])->name('vision.mission');
Route::post('/store-vision-mission',[VisionMissionController::class,'store'])->name('store.vision_mission');
Route::get('/vision-mission/edit/{id}',[VisionMissionController::class,'edit']);
Route::post('/update/vision-mission/{id}',[VisionMissionController::class,'update']);

//gallery
Route::get('galleries', [HomePageController::class,'galleries'])->name('galleries');
Route::post('gallery-image-added', [HomePageController::class,'galleryImageAdded'])->name('added.image');


//// committee page

// executive
Route::get('/executive-members',[ExecutiveCommitteePageController::class,'executiveCommittee'])->name('executive.member');
Route::post('/executive-member-store',[ExecutiveCommitteePageController::class,'executiveCommitteeStore'])->name('store.executive');
Route::get('executive/member/edit/{id}',[ExecutiveCommitteePageController::class,'executiveCommitteeEdit']);
Route::post('update/executive/{id}',[ExecutiveCommitteePageController::class,'executiveCommitteeUpdate']);

// advisors
Route::get('/advisor-members',[AdvisorCommitteeController::class,'advisorCommittee'])->name('advisor.member');
Route::post('/advisor-member-store',[AdvisorCommitteeController::class,'advisorCommitteeStore'])->name('store.advisor');
Route::get('advisor/member/edit/{id}',[AdvisorCommitteeController::class,'advisorCommitteeEdit']);
Route::post('update/advisor/{id}',[AdvisorCommitteeController::class,'advisorCommitteeUpdate']);


/// news page

//latest news
Route::get('latest-news',[NewsController::class,'news'])->name('latest.news');
Route::post('latest-news',[NewsController::class,'store'])->name('store.news');
Route::get('news/details/{id}',[NewsController::class,'show']);
Route::get('news/edit/{id}',[NewsController::class,'edit']);
Route::post('update/news/{id}',[NewsController::class,'update']);

//popular quotes
Route::get('popular-quotes',[QuoteController::class,'quotes'])->name('popular.quotes');
Route::post('popular-quote',[QuoteController::class,'store'])->name('store.quote');
Route::get('quote/edit/{id}',[QuoteController::class,'edit']);
Route::post('update/quote/{id}',[QuoteController::class,'update']);