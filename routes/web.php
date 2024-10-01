<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bienvenu');
});


Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/a-propos/{prenom}',function ($prenom){
    return view('details',['prenom' => $prenom]);
});



