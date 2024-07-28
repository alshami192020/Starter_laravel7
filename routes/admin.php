<?php
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\Authenticate;

Route::get('/admin', function () {
    return 'welcome admin route';
});
