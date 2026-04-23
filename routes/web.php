<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage', ["name" => "Valerio Scano"]);
});

Route::get("/about", function() {
    return view("about");
    })->name("about");

Route::get("/contatti", function() {
    return view("contatti");
})->name("contatti");
