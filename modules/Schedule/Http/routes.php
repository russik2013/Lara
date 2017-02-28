<?php

Route::group(['prefix' => 'schedule', 'namespace' => 'Modules\Schedule\Http\Controllers'], function()
{
	Route::get('/', 'ScheduleController@index');
});