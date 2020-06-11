<?php
/**
 * Route for User ApiModules
 * Declare route normally like all other 😀
 * For most case, your module name will be the parent path (Ex: /home/abc, /home/xxxx)
 */

$moduleNamespace = "App\ApiModules\Users\Controllers";

Route::prefix('api/users')->namespace($moduleNamespace)->group(function () {
    Route::get('', "UserController@index");
});
