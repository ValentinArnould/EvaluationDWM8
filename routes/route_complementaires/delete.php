<?php
Route::get('/delete/race', 'Race@supprimer');
Route::get('/delete/classe', 'Classe@supprimer');
Route::get('/delete/competence', 'Competence@supprimer');
Route::get('/delete/don', 'Don@supprimer');
Route::get('/delete/custom', 'Custom@supprimer');
Route::post('/delete/race/del', 'Race@effacer');
Route::post('/delete/classe/del', 'Classe@effacer');
Route::post('/delete/don/del', 'Don@effacer');
