<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::post('create-contact', [FrontendController::class, 'create_contact'])->name('create-contact');

Route::get('/', [FrontendController::class, 'homePage'])->name('home');
Route::get('service-details/{link}', [FrontendController::class, 'serviceDetail'])->name('service_details');
Route::get('/courses', [FrontendController::class, 'course'])->name('courses');
Route::get('course-detail/{link}', [FrontendController::class, 'courseDetail'])->name('course_details');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('blog-detail/{link}', [FrontendController::class, 'blog_details'])->name('blog_details');
Route::get('/contact-us', [FrontendController::class, 'contact_us'])->name('contact_us');
Route::post('/submit', [FrontendController::class, 'mail'])->name('submit');
Route::get('/clear', function(){
   \Artisan::call('optimize:clear');
   \Artisan::call('config:clear');
   return 'done';
});

