<?php
    /** WebController */
    Route::get('/', 'WebController@construccion')->name('web.construccion');

    Route::get('/demo', 'WebController@inicio')->name('web.inicio');

    Route::middleware('auth')->group(function(){
        Route::prefix('panel')->group(function(){
            Route::get('/', 'WebController@panel')->name('web.panel');
        });
    });
    
    /** CorreoController */
    Route::post('/contactar', 'CorreoController@contactar')->name('correo.contactar');

    Route::get('/gracias', 'CorreoController@gracias')->name('correo.gracias');