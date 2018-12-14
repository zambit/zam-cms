<?php

Route::get('', ['as' => 'admin.dashboard', function () {
    return response()->redirectTo('/admin/articles');
}]);