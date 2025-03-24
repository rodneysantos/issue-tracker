<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\ViewIssue;

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/repos/{owner}/{repo}/issues/{issueNumber}', ViewIssue::class)->name('view-issue');
