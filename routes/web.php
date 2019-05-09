<?php

use Korko\PHPInfo\Http\Controllers\PHPInfoController;

Route::get('phpinfo', PHPInfoController::class.'@index');
