<?php

Route::group(['middleware' => 'web', 'prefix' => 'customfields', 'namespace' => 'Modules\CustomFields\Http\Controllers'], function()
{
    Route::get('/', 'CustomFieldsController@index');
});
