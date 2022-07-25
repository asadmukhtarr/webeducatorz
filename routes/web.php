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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/strainer',function(){
// 	return view('singletrainer');
// });
Route::get('/','welcomeController@welcome')->name('home');
Route::get('/courses','coursesController@courses')->name('courses');
Route::get('/course/{slug?}','coursesController@show')->name('course');
Route::get('/fee-structure','coursesController@fee')->name('fee.strcture');
Route::get('/new-schedule','coursesController@schedule')->name('new.schedule');
Route::get('/contact','coursesController@contact')->name('contact');
Route::post('/send/message','coursesController@contactMessage')->name('contactMessage');
Route::get('/blog','pagesController@blog')->name('blog');
Route::get('/blog/{slug}','pagesController@post')->name('blog.post');
Route::get('/apply-online','coursesController@apply')->name('apply.online');
Route::post('/admission-applied','coursesController@onlineAdmit')->name('onlineAdmit');
Route::get('/about','pagesController@about')->name('about');
Route::get('/terms','pagesController@terms')->name('terms');
Route::get('/privacy-policy','pagesController@privacy')->name('privacy');
Route::get('/trainers','instructorsController@instructor')->name('instructors');
Route::get('/trainer/{id}','instructorsController@singletrainer')->name('singletrainer');
Route::get('/workshops','pagesController@workshop')->name('workshops');
Route::get('/track-your-certificate','pagesController@certificate')->name('certificate');
Route::get('frequesntly-asked-questions','pagesController@faq')->name('faq');
Route::get('/events','pagesController@events')->name('event');
Route::get('/event/{id}','pagesController@singleevent')->name('singleevent');
Route::get('/softwares','pagesController@software')->name('softwares');
Route::get('/software/{slug}','pagesController@singlesoftware')->name('singlesoftwares');
Route::post('/subscriber','pagescontroller@subscriber')->name('subscriber');
Route::get('email',function(){
    return view('email');
});
Route::get('/login','logincontroller@login')->name('login');
