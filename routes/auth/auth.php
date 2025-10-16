<?php

use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/register', Register::class)->name('register');