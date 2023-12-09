<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Post;
use App\Livewire\About;
use App\Http\Controllers\Register;
use App\Livewire\Counter;
use App\Livewire\Galeri;
use App\Livewire\Home;
use App\Livewire\Kegiatan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/kegiatan', Kegiatan::class);
Route::get('/galeri', Galeri::class);
Route::get('/galery/{post:slug}', [Post::class, 'getPost']);
Route::get('/register', [Register::class, 'store']);
Route::get('/login', [Login::class, 'Authenticate']);

