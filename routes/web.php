<?php

use Illuminate\Support\Facades\Route; { {
    }
}
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/jenis-proposal', function () {
    return view('pages/master/jenis-proposal');
})->name('jenis-proposal');

Route::get('/sub-jenis-proposal', function () {
    return view('pages/master/sub-jenis-proposal');
})->name('sub-jenis-proposal');

Route::get('/template-proposal', function () {
    return view('pages/master/template-proposal');
})->name('template-proposal');

Route::get('/data-reviewer', function () {
    return view('pages/data/data-reviewer');
})->name('data-reviewer');

Route::get('/data-pendaftaran', function () {
    return view('pages/data/data-pendaftaran-proposal');
})->name('data-pendaftaran');
