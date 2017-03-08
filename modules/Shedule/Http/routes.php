<?php

Route::group([ 'namespace' => 'Modules\Shedule\Http\Controllers'], function()
{
	Route::resource('/shedule', 'SheduleController');

});