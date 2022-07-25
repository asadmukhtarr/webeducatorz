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

Route::get('/','DashboardController@index')->name('dashboard');
Route::middleware('auth')->group(function(){
    Route::prefix('search')->namespace('search')->group(function(){
        Route::get('/visit','findController@visit')->name('search.visit');
        Route::get('/student','findController@student')->name('search.course');
    });
    // dashboard ..
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    // catgoery ..
    Route::namespace('category')->prefix('categories')->group(function(){
        Route::get('/','categoriesController@index')->name('categories');
        Route::post('/save','categoriesController@save')->name('save.category');
        Route::get('/delete/{id}','categoriesController@delete')->name('delete.category');
        Route::get('/edit/{id}','categoriesController@edit')->name('edit.category');
        Route::post('/update/{id}','categoriesController@update')->name('update.category');
    });

    // academics ..

    Route::prefix('academics')->namespace('academics')->group(function(){
        //Route::get('/alerts','Alert')->name('academics.alert');
        Route::get('/attendence','attendenceController@index')->name('academics.attendence');
        Route::get('/notes','notesController@index')->name('academics.notes');
        Route::get('/visits','visitsController@index')->name('academics.visit');
        Route::get('/visit/add','visitsController@add')->name('add.visit');
        Route::post('/visit/save','visitsController@save')->name('visitor.save');
        Route::get('/visit/delete/{id}','visitsController@delete')->name('delete.visit');
        Route::get('/export/excel','visitsController@excel')->name('export.excel.visit');
        Route::get('/onlineadmissions','onlineadmissionsController@index')->name('academics.onlineadmissions');
        Route::get('/aboutstudent/{id}','onlineadmissionsController@application')->name('aboutstudent');
        Route::post('/aboutstudent/{id}','onlineadmissionsController@aboutstudent')->name('notesubmit');
        Route::get('/disappearstudent/{id}','onlineadmissionsController@disappearStudent')->name('disappearstudent');
    });

    // Badges ..
    Route::prefix('badges')->namespace('badges')->group(function(){
        Route::get('/','badgesController@index')->name('badges');
        Route::get('/create','badgesController@create')->name('create.badge');
        Route::post('/save','badgesController@save')->name('save.badge');
        Route::get('/edit/{id}','badgesController@edit')->name('edit.badge');
        Route::post('/update/{id}','badgesController@update')->name('update.badge');
        Route::get('/{id}','badgesController@show')->name('badge');
        Route::get('/lecture/{id}','badgesController@lecture')->name('lecture');
        Route::post('/addlecture','badgesController@addlecture')->name('addlecture');
        Route::get('/deletelecture/{id}','badgesController@deletelecture')->name('deletelecture');
        Route::get('/bcode/{id}','badgesController@code')->name('code.badge');
    });
        // course
    Route::prefix('courses')->namespace('courses')->group(function(){
        Route::get('/','coursesController@index')->name('course');
        Route::post('/save','coursesController@store')->name('course.save');
        //Route::get('/description/{id}','Description')->name('course.description');
        Route::get('/add','coursesController@create')->name('add.course');
        Route::get('/delete/{id}','coursesController@delete')->name('delete.course');
    });
    Route::prefix('course')->group(function(){
        Route::get('download/outline/{id}','courses\coursesController@outline')->name('download.course');
        Route::get('{slug?}','courses\coursesController@show')->name('training');
        Route::get('edit/{slug?}','courses\coursesController@edit')->name('edit.training');
        Route::post('update/{slug?}','courses\coursesController@update')->name('update.training');
      
    });
           // Teacher ..
    //Route::resource('instructors','instructor\instructorsController');

        
    Route::prefix('teacher')->namespace('teachers')->group(function(){
        Route::get('/add/new','teachersController@create')->name('add.teacher');
        Route::get('/delete/{id}','teachersController@delete')->name('delete.teacher');
        Route::post('/save','teachersController@store')->name('teacher.save');
        Route::get('/profile/{id}','teachersController@show')->name('show.teacher');
        Route::get('/profile/edit/{id}','teachersController@edit')->name('edit.teacher');
        Route::post('/profile/update/{id}','teachersController@update')->name('update.teacher');
        
    });

    
    Route::prefix('time-table')->namespace('timetable')->group(function(){
        Route::get('/slots','timeController@slot')->name('time.table');
        Route::post('/save/slot','timeController@createslot')->name('create.slot');
        Route::post('/save/room','timeController@createroom')->name('create.room');
        Route::get('/slot/delete/{id}','timeController@removeslot')->name('remove.slot');
        Route::get('/room/delete/{id}','timeController@removeroom')->name('remove.room');
    });
    Route::get('/teachers','teachers\teachersController@index')->name('teachers');

    // Student ..
    Route::prefix('student')->namespace('students')->group(function(){
        Route::get('/active/enrollment/{id}','studentsController@active')->name('active.student');
        Route::get('/freeze/enrollment/{id}','studentsController@freeze')->name('freeze.student');
        Route::get('/cancel/enrollment/{id}','studentsController@cancel')->name('cancel.student');
        Route::get('/id/{id}','studentsController@show')->name('student');
        Route::get('/code/{id}','studentsController@student')->name('code.student');
        Route::get('/badges/{id}','studentsController@badge')->name('badges.course');
        Route::get('/add','studentsController@create')->name('add.student');
        Route::get('/existing/student/add','studentsController@exist')->name('exist.student');
        Route::get('/fee/details/{id}','studentsController@feedetails')->name('fee.detail');
        Route::post('/fee/installments/{id}','studentsController@instalments')->name('fee.instalment');
        Route::get('/fee/installment/details/{id}','studentsController@feeinstallmentdetails')->name('inst.detail');
        Route::post('/fee/installment/pay/{id}','studentsController@pay')->name('inst.pay');
        Route::get('/invoice/download/{id}','studentsController@invoice')->name('invoice.download');
        Route::get('/invoice/full/download/{id}','studentsController@invoicef')->name('invoicef.download');
    });

    // Students ..
    Route::prefix('students')->namespace('students')->group(function(){
        Route::get('/','studentsController@index')->name('students');
        Route::post('/save','studentsController@save')->name('save.student');
        Route::post('/existing/save','studentsController@exsave')->name('save.exist');
    });
        // Staf ..
    Route::prefix('staff')->namespace('staff')->group(function(){
        //Route::get('/trainer','Trainers')->name('trainers'); // trainer ..
        Route::get('/add','staffsController@create')->name('create.staff'); // create Managment ..
        Route::get('/edit/{id}','staffsController@editstaff')->name('edit.staff'); // create Managment ..
        Route::post('/update/{id}','staffsController@update')->name('update.staff');
        Route::get('/managemenet','staffsController@management')->name('staff.managment'); // Managment ..
        Route::post('/save','staffsController@addstaff')->name('staff.save'); // Managment ..
        Route::get('/designation','staffsController@designations')->name('staff.designation'); // Managment ..
        Route::post('/designation/create','staffsController@createdesignation')->name('create.designation'); // Managment ..
    });
    //  User Management ..
    Route::prefix('user-managment')->namespace('usermanagement')->group(function(){
        Route::get('/users','usermanagementController@users')->name('users');
        Route::get('/add','usermanagementController@create')->name('add.users');
        Route::post('/save','usermanagementController@user_save')->name('save.users');
        Route::get('/permissions','usermanagementController@permissions')->name('permissions');
        Route::get('/delete/permission/{id}','usermanagementController@deletepermission')->name('delete.permission');
        Route::get('/edit/permission/{id}','usermanagementController@editpermission')->name('edit.permission');
        Route::post('/update/permission/{id}','usermanagementController@updatepermission')->name('update.permission');
        Route::post('/permission/save','usermanagementController@permissionsave')->name('permission.save');
        Route::get('/roles','usermanagementController@roles')->name('roles');
        Route::get('/role/edit/{id}','usermanagementController@editrole')->name('edit.role');
        Route::post('/role/update/{id}','usermanagementController@updaterole')->name('update.role');
        Route::post('/roles/save','usermanagementController@rolesave')->name('save.role');
        Route::get('/role/delete/{id}','usermanagementController@deleterole')->name('role.delete');
        Route::get('/role/permissions/{id}','usermanagementController@assignpermissions')->name('assign.permission');
        Route::post('/role/permission/{id}','usermanagementController@assignpermission')->name('assign.permissions');
        Route::post('/update/{id}','usermanagementController@update_user')->name('update_user_profile');
    });
    // settings ..
    Route::prefix('setting')->namespace('settings')->group(function(){
        Route::get('/profile','settingsController@profile')->name('profile');
        Route::post('/general/save','settingsController@savemeta')->name('general.post');
        Route::get('/change/password','settingsController@password')->name('password.change');
        Route::post('/change/password/user','settingsController@changePassword')->name('changePassword');
    });
    Route::get('/general-settings','settings\settingsController@general')->name('general.settings');
    // Accounts ..
    Route::prefix('accounts')->namespace('accounts')->group(function(){
        Route::get('/overview','accountsController@index')->name('accounts.overview');
        Route::get('/expense','accountsController@expense')->name('accounts.expense');
        Route::post('/expense/save','accountsController@expensesave')->name('accounts.expensesave');
        Route::get('/expense/delete/{id}','accountsController@expensedelete')->name('accounts.expensedelete');
        Route::get('/category','accountsController@category')->name('accounts.category');
        Route::post('/category/save','accountsController@categorysave')->name('accounts.savecategory');
        Route::get('/category/delete/{id}','accountsController@categorydelete')->name('accounts.categorydelete');
        Route::get('/category/edit/{id}','accountsController@categoryedit')->name('accounts.categoryedit');
        Route::post('/category/update/{id}','accountsController@categoryupdate')->name('accounts.updatecategory');
        Route::get('/feecollection','feecollectionsController@index')->name('accounts.feecollection');
        Route::get('/all/installments','feecollectionsController@installments')->name('all.installments');
        Route::get('/pending/installments','feecollectionsController@pending')->name('pending.installments');
        Route::get('/current/month','feecollectionsController@month')->name('month.installments');
        Route::get('/current/month/pdf','feecollectionsController@monthpdf')->name('accounts.monthpdf');
        Route::get('/salaries','salariesController@index')->name('accounts.salaries');
        Route::get('/download/expense','feecollectionsController@expensesave')->name('download.expense');
        Route::get('/download/receivings','feecollectionsController@receivingsave')->name('download.receivings');
        Route::get('/download/re','feecollectionsController@resave')->name('download.resave');
    });

    Route::prefix('blog')->namespace('blog')->group(function(){
        Route::get('/post/create','blogController@create')->name('create.post');
        Route::get('/post/save',function(){
            return "Asad";
        })->name('post.save');
        Route::get('/','blogController@posts')->name('all.posts');
        Route::get('/delete/{id}','blogController@delPost')->name('del.posts');
        Route::get('/edit/{id}','blogController@edit')->name('edit.posts');
        Route::post('/update/{id}','blogController@updatePost')->name('post.update');
    });
    // events 
    Route::prefix('workshop')->group(function(){
        Route::get('/create','workshop\workshopController@create')->name('create.event');
        Route::get('/delete/{id}','workshop\workshopController@delete')->name('delete.event');
        Route::post('/save','workshop\workshopController@save')->name('save.event');
        Route::get('/all','workshop\workshopController@events')->name('all.events');
    });
});
Route::get('/login','Auth\LoginController@login')->name('login');
Route::post('/admin/login','Auth\LoginController@adminLogin')->name('admin.login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/email',function(){
    return view('emails.eventmail');
});
Route::get('/alle',function(){
    return view('pdf.alldetails');
});
