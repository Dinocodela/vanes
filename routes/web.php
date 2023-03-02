<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\MailController;

use App\Http\Controllers\LeadController;

use App\Http\Controllers\FolderController;
use App\Http\Controllers\FileController;
use App\Http\Middleware\admin;
use App\Http\Middleware\user;

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

Route::get('/', function () {
    return view('home'); 
});

Route::get('/classes', [ClassController::class, 'classes']);
Route::get('blog',[BlogController::Class,'index']);
Route::get('blog/{id}',[BlogController::Class,'show']);


Route::get('/login', function () {
    if(session('user.user_type') == 'User'){
        return redirect('/dashboard');
    }
    else if(session('user.user_type') == 'Admin'){
        return redirect('/admin');
    }
    return view('user_login');
});


Route::get('/dashboard', function(){
    if(session('user.user_type') == 'User'){
        return view('home');
    }
    return redirect('/login');
});

Route::get('/admin', function(){
    if(session('user.user_type') == 'Admin'){
        return view('admin.index');
    }
    return redirect('/login');

});

// logout
Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('/login');
});
Route::view('no-access', 'no_access');
Route::view('contact-nai', 'contact');
Route::view('test', 'layouts/test');
Route::post('contact_form', [UserController::class, 'contactForm']);
Route::post('lead_form', [MailController::class, 'leadForm']);

/*user section*/
Route::post('create-user', [UserController::class, 'store']);
//Route::view('login', 'user_login')->name('login');
Route::post('access-user', [UserController::class, 'login']);
Route::get('profile', [UserController::class, 'edit']);
Route::post('update-user', [UserController::class, 'update']);
Route::view('main', 'home_main');

Route::get('verify', [UserController::class, 'verifyUser'])->name('verify.user');

Route::post('reset-password', [UserController::class, 'resetPassword']);
Route::get('reset', [UserController::class, 'resetPass'])->name('reset');
Route::view('new-password', 'new_password')->name('newPassword');
Route::post('new-password-store', [UserController::class, 'newPasswordStore']);

Route::middleware([user::class])->group(function () {
    // resume section

    Route::get('dashboard', [ResumeController::class, 'index']);   


    /**
     * Routes for Folder CRUD
     */
    Route::get('my-documents', [FolderController::class, 'index']);
    Route::get('get-folder-by-id/{folderId}', [FolderController::class, 'getFolderById']);
    Route::post('create-folder',[FolderController::class, 'create']);
    Route::post('sorting-folder',[FolderController::class, 'sorting']);
    Route::post('rename-folder',[FolderController::class, 'renameFolder']);
    Route::delete('delete-folder/{folderId}',[FolderController::class, 'deleteFolder']);
    Route::get('get-tree-data', [FolderController::class, 'getTreeData']);
    Route::post('upload', [FileController::class, 'create'])->name('createFile');
    Route::post('rename-file',[FileController::class, 'renameFile']);
    Route::delete('delete-file/{fileId}',[FileController::class, 'deleteFile']);
    Route::get('get-folder-files/{type}/{folderId}', [FileController::class, 'getFolderFiles']);
    Route::get('get-file-by-id/{fileId}', [FileController::class, 'getFileById']);
    Route::POST('copy-file', [FileController::class, 'copyFile']);
    Route::get('check-file-exist/{folderId}', [FolderController::class, 'checkFileExist']);
    Route::get('download/{fileId}', [FileController::class, 'download']);
});


/************************************************************
 admin section
 ************************************************************/

Route::middleware([admin::class])->group(function () {
    Route::view('resume-list', 'resume_list');
    Route::resource('sections', SectionController::class);

    Route::get('templates', [TemplateController::class, 'index']);
    Route::post('template_store', [TemplateController::class, 'store']);
    Route::post('template_update', [TemplateController::class, 'update']);
    Route::get('template_delete/{id}', [TemplateController::class, 'destroy']);

    Route::get('users', [UserController::class, 'index']);

    Route::post('storeUser', [UserController::class, 'storeUser']);
    Route::post('updateUser', [UserController::class, 'updateUser']);
    Route::get('deleteUser/{id}', [UserController::class, 'deleteUser']);

    /*blog_category*/
    Route::get('/blog-categories', [BlogCategoryController::class, 'index']);
    Route::post('/store_blog_category', [BlogCategoryController::class, 'store']);
    Route::post('/update_blog_category', [BlogCategoryController::class, 'update']);
    Route::get('/delete_blog_category/{id}', [BlogCategoryController::class, 'destroy']);

    /*blog*/
    Route::get('/blogs', [BlogController::class, 'blogs']);
    Route::get('/add-blog', [BlogController::class, 'create']);
    Route::post('/save_blog', [BlogController::class, 'store']);
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit']);
    Route::post('/update_blog', [BlogController::class, 'update']);
    Route::get('/delete-blog/{id}', [BlogController::class, 'destroy']);

    /*class*/
   
    Route::get('/class', [ClassController::class, 'index']);
    Route::get('/add-class', [ClassController::class, 'create']);
    Route::post('/save_class', [ClassController::class, 'store']);
    Route::get('/edit-class/{id}', [ClassController::class, 'edit']);
    Route::post('/update_class', [ClassController::class, 'update']);
    Route::get('/delete-class/{id}', [ClassController::class, 'destroy']);
    
    Route::view('leads', 'admin.leads');


});












