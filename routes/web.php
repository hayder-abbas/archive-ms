<?php

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\AuditLogController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\Settings\SetLocaleContruller;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
    Route::resource('boxes', BoxController::class);
    Route::resource('entities', EntityController::class);
    Route::resource('docs', DocController::class);
    Route::resource('attachments', AttachmentController::class);
    Route::resource('borrows', BorrowController::class);
    Route::resource('audit-logs', AuditLogController::class);
});

Route::put('/settings/locale', SetLocaleContruller::class)->name('settings.local');

require __DIR__ . '/settings.php';
