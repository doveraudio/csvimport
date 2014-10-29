<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Route::model('upload','Upload');

$upload = new \Jleach\Dataimport\Models\Upload();

Route::any('/uploaded', 'Jleach\Dataimport\Controllers\UploadController@index');

Route::any('/index', 'Jleach\Dataimport\Controllers\DataimportController@index');

Route::any('/dataimportload', 'Jleach\Dataimport\Controllers\DataimportController@upload');

Route::get('dataimport',function(){
    return View::make('dataimport::dataimport')->with('route_name','i\'m a view route biscuit');
    });
        
Route::any('alluploads', function(){
    return View::make('dataimport::upload')->with('route_name','i\'m a view route biscuit');
    });

//Route::get('/search',array('uses' => 'Jleach\Dataimport\Controllers\UploadController@show'));

Route::post('categories', function(){
	if(\Request::ajax()){
                if(Input::has('data')){
                    $action = 'show';
                    return App::make('Jleach\Dataimport\Controllers\UploadController')->$action();
                }
		
	}
});