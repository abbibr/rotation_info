<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/locale/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'uz', 'ru'])) {
        session(['locale' => $lang]); // Save selected language to session
    }
    return redirect()->back();
})->name('locale');
