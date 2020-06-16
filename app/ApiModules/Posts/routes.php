<?php

/**
 * Route for Post ApiModules
 * Declare route normally like all other 😀
 * For most case, your module name will be the parent path (Ex: /home/abc, /home/xxxx)
 */

$moduleNamespace = "App\ApiModules\Posts\Controllers";

Route::prefix('api/posts')->namespace($moduleNamespace)->group(function () {
    Route::get('', "PostController@index");
    Route::get('{id}', 'PostController@show');
    Route::post('', 'PostController@store');
});


