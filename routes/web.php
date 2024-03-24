<?php

use App\Http\Controllers\SiteController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('product/{slug}', [SiteController::class, 'details'])->name('site.details');
