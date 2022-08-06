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
Route::get('/teacher_admission','coursesController@teacher_admission')->name('teacher_admission');
Route::post('/teacher_admission_apply','coursesController@teacher_admission_apply')->name('teacher_admission_apply');
Route::post('/admission-applied','coursesController@onlineAdmit')->name('onlineAdmit');
Route::get('/about','pagesController@about')->name('about');
Route::get('/terms','pagesController@terms')->name('terms');
Route::get('/privacy-policy','pagesController@privacy')->name('privacy');
Route::get('/trainers','instructorsController@instructor')->name('instructors');
Route::get('/trainer/{id}','instructorsController@singletrainer')->name('singletrainer');
Route::get('/workshops','pagesController@workshop')->name('workshops.event');
Route::get('/workshops/{slug}','pagesController@workshopspost')->name('workshops.post');
Route::get('/track-your-certificate','pagesController@certificate')->name('certificate');
Route::get('frequently-asked-questions','pagesController@faq')->name('faq');
Route::get('/events','pagesController@events')->name('event');
Route::get('/event/{id}','pagesController@singleevent')->name('singleevent');
Route::get('/softwares','pagesController@software')->name('softwares');
Route::get('/software/{slug}','pagesController@singlesoftware')->name('singlesoftwares');
Route::post('/subscriber','pagescontroller@subscriber')->name('subscriber');
Route::get('/category/{id}','pagesController@category')->name('category.search');
Route::get('email',function(){
    return view('email');
});

Route::get('/login','loginController@login')->name('login');
Route::post('/login','loginController@authlogin')->name('authlogin');
Route::post('/logout','loginController@logout')->name('logout');

Route::prefix('lms')->middleware('auth')->group(function(){
    Route::get('/dashboard',"DashboardController@dashbaord")->name('dashboard');
    Route::get('/profile','DashboardController@profile')->name('profile');
    Route::get('/enrolled/courses','DashboardController@enrolled_courses')->name('enrolled_courses');
    Route::get('/lesson-details/{id}','DashboardController@lessondetails')->name('lesson-details');
    Route::get('/new/admissions','DashboardController@newadmissions')->name('newadmissions');
    Route::get('/accounts','DashboardController@accounts')->name('accounts');
    Route::get('/workshop','DashboardController@workshops')->name('workshops');
    Route::get('/feeds','DashboardController@feeds')->name('feeds');
    Route::get('/settings','DashboardController@settings')->name('settings');
    Route::post('/update_user/{id}','DashboardController@update_user')->name('update_user');
     
});


Route::post('/trail_form','DashboardController@trail_form')->name('trail_form');

