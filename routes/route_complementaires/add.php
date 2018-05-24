<?php
Route::get('/add/race', 'Race@ajouter');
Route::get('/add/classe', 'Classe@ajouter');
Route::get('/add/competence', 'Competence@ajouter');
Route::get('/add/don', 'Don@ajouter');
Route::get('/add/custom', 'Custom@ajouter');
Route::post('/add/race/new', 'Race@inserer');
Route::post('/add/classe/new', 'Classe@inserer');
Route::post('/add/don/new', 'Don@inserer');
Route::post('/add/custom/new', 'Custom@inserer');
