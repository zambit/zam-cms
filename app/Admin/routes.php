<?php

Route::get('', ['as' => 'admin.dashboard', function () {
    return response()->redirectTo('/admin/articles');
}]);

Route::get('logout', ['as' => 'admin.logout', function () {
    \Auth::guard()->logout();

    request()->session()->invalidate();

    return response()->redirectTo('/');
}]);