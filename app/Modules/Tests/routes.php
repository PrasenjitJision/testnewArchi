<?php

Route::group(['middleware' => ['web']], function () {
	Route::group(['prefix' => '/test', 'namespace' => 'App\Modules\Tests\Controllers'],function () {
		
			Route::any('/hello', 'TestController@hello');
			Route::any('/', 'TestController@index');
		});
}); 


?>