<?php

use Illuminate\Support\Facades\Route;

Route::get('/{path}')->where('path', '.*')->name('index');
