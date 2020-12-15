
<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'roles:admin,manager']], function () {
    Route::get('/', 'DashboardController')->name('dashboard');
});
