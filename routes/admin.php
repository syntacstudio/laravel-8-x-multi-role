
<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'roles:admin']], function () {
    Route::get('/', 'DashboardController')->name('dashboard');
});
