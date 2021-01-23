<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/{path}')->where('path', '.*')->name('index');
