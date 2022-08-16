<?php

use App\Http\Controllers\commentController;
use App\Http\Controllers\postsController;
use App\Mail\DiscountOffer;
use App\Mail\testMail;
use App\Models\post;
use Illuminate\Support\Facades\Route;
use Illuminate\support\facades\DB;
use carbon\carbon;
use Illuminate\Support\Facades\Mail;

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
    return view('welcome');
});


Route::get('/hello/{name}', function ($name) {
    return view('hello', compact('name'));
});



Route::resource('posts', postsController::class);


Route::post('/posts/{post}/comments', [commentController::class , 'store']);

Route::post('mail/' , function (){
    $email = request()->validate([
        'email' => 'required|email'
    ]);
    Mail::to($email)->send(new DiscountOffer());
    return back();
});
