<?php

use App\Http\Livewire\HomePage;
use App\Http\Livewire\LoginPage;
use App\Http\Livewire\RegisterPage;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class);
Route::get('/login', LoginPage::class);
Route::get('/register', RegisterPage::class);

