<?php

use Illuminate\Support\Facades\Route;



Route::get("/", "RoadmapController@index");
Route::post("/process", "RoadmapController@process") -> name("process");