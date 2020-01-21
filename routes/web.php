<?php


Route::get('/', ['uses' => 'Controller@principal']);
Route::get('/cadastro', ['uses' => 'Controller@cadastro']);
Route::get('/login', ['uses' => 'Controller@login']);

