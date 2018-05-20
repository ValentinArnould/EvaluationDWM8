<?php
Route::get('/update/race', 'Race@modifier');
Route::get('/update/classe', 'Classe@modifier');
Route::get('/update/competence', 'Competence@modifier');
Route::get('/update/don', 'Don@modifier');
Route::get('/update/custom', 'Custom@modifier');
Route::post('/update/race/update', 'Race@update');
Route::post('/update/classe/update', 'Classe@update');
Route::post('/update/don/update', 'Don@update');
