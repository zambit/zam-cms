<?php

Route::namespace('Api\V1')->prefix('v1')->group(function () {
    Route::get('languages', 'LanguageController@index')->name('api.languages.index');
    Route::get('pages', 'PageController@index')->name('api.pages.index');
    Route::get('pages/{page}', 'PageController@show')->name('api.pages.show');

    Route::namespace('Blog')->prefix('blog')->group(function () {
        Route::get('categories', 'CategoryController@index')->name('api.blog.categories.index');
        Route::get('tags', 'TagController@index')->name('api.blog.tags.index');
        Route::get('articles', 'ArticleController@index')->name('api.blog.articles.index');
        Route::get('articles/{article}', 'ArticleController@show')->name('api.blog.articles.show');
    });
});