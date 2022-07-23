<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Logout\LogoutController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\Profile\ProfileController;
use App\Http\Controllers\Backend\Setting\SettingController;
use App\Http\Controllers\Backend\Others\About\AboutController;
use App\Http\Controllers\Backend\Others\Resume\ResumeController;
use App\Http\Controllers\Backend\Others\Resume\EducationController;
use App\Http\Controllers\Backend\Others\Resume\SkillController;
use App\Http\Controllers\Backend\Others\Work\WorkController;
use App\Http\Controllers\Backend\Others\Social\SocialController;
use App\Http\Controllers\Frontend\Home\HomeController;

Route::get('/', function () {
    return view('frontend.body.index');
});


Auth::routes([
    'register' => false,
    'login' => false,
 ]);

 Route::get('/', [HomeController::class, 'Home'])->name('home');
// User Logout
Route::get('/logout',[LogoutController::class,'Logout'])->name('user.logout');

// Login Admin/User
Route::get('/auth/login',[LoginController::class,'AdminLogin'])->name('auth.login');
Route::post('/login/submit',[LoginController::class,'SubmitLogin'])->name('submit.login');

Route::group(['middleware' => 'auth'],function(){

    // Dashboard
    Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard');

// Admin Profile
Route::prefix('profile')->group(function()
{
   Route::get('/view',[ProfileController::class,'AdminProfile'])->name('profile.view');
   Route::get('/edit',[ProfileController::class,'AdminProfileEdit'])->name('profile.edit');
   Route::post('/store',[ProfileController::class,'AdminStore'])->name('user.profile.store');
   Route::get('/change/password',[ProfileController::class,'ChPassword'])->name('change.password');
   Route::post('/change/password',[ProfileController::class,'ChPasswordUpdate'])->name('user.change.password.update');
});

// About
Route::prefix('about')->group(function()
{
   Route::get('/view',[AboutController::class,'View'])->name('about.view');
   Route::post('/update',[AboutController::class,'Update'])->name('about.update');
});

// Work
Route::prefix('work')->group(function()
{
   Route::get('/view',[WorkController::class,'View'])->name('work.view');
   Route::get('/add',[WorkController::class,'Add'])->name('work.add');
   Route::post('/store',[WorkController::class,'Store'])->name('work.store');
   Route::get('/edit/{id}',[WorkController::class,'Edit'])->name('work.edit');
   Route::post('/update/{id}',[WorkController::class,'Update'])->name('work.update');
   Route::get('/delete/{id}',[WorkController::class,'Delete'])->name('work.delete');
});

// Resume
Route::prefix('resume')->group(function()
{
   Route::get('/view',[ResumeController::class,'View'])->name('resume.view');
   Route::get('/add',[ResumeController::class,'Add'])->name('resume.add');
   Route::post('/store',[ResumeController::class,'Store'])->name('resume.store');
   Route::get('/edit/{id}',[ResumeController::class,'Edit'])->name('resume.edit');
   Route::post('/update/{id}',[ResumeController::class,'Update'])->name('resume.update');
   Route::get('/delete/{id}',[ResumeController::class,'Delete'])->name('resume.delete');
});

// Education
Route::prefix('education')->group(function()
{
   Route::get('/view',[EducationController::class,'View'])->name('ed.view');
   Route::get('/add',[EducationController::class,'Add'])->name('ed.add');
   Route::post('/store',[EducationController::class,'Store'])->name('ed.store');
   Route::get('/edit/{id}',[EducationController::class,'Edit'])->name('ed.edit');
   Route::post('/update/{id}',[EducationController::class,'Update'])->name('ed.update');
   Route::get('/delete/{id}',[EducationController::class,'Delete'])->name('ed.delete');
});

// Skill
Route::prefix('skill')->group(function()
{
   Route::get('/view',[SkillController::class,'View'])->name('sk.view');
   Route::get('/add',[SkillController::class,'Add'])->name('sk.add');
   Route::post('/store',[SkillController::class,'Store'])->name('sk.store');
   Route::get('/edit/{id}',[SkillController::class,'Edit'])->name('sk.edit');
   Route::post('/update/{id}',[SkillController::class,'Update'])->name('sk.update');
   Route::get('/delete/{id}',[SkillController::class,'Delete'])->name('sk.delete');
});

// Setting
Route::prefix('setting')->group(function()
{
   Route::get('/update',[SettingController::class,'SettingView'])->name('setting.view');
   Route::post('/update',[SettingController::class,'SettingUpdate'])->name('setting.update');
});

// Social
Route::prefix('social')->group(function()
{
   Route::get('/update',[SocialController::class,'SocialView'])->name('social.view');
   Route::post('/update',[SocialController::class,'SocialUpdate'])->name('social.update');
});

});
