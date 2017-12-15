<?php


Route::get('/update/race', 'Race@modif');

Route::post('/update/race/up', 'Race@modifier');

Route::get('/update/classe', 'Classe@modifier');

Route::get('/update/competence', 'Competence@modifier');

Route::get('/update/don', 'Don@modifier');

Route::get('/update/custom', 'Custom@modifier');

Route::post('/update/race/up', 'Race@update');
