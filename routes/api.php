<?php

use Illuminate\Http\Request;

Route::get("register", "RegisterController@index");
Route::get("register/{register}", "RegisterController@show");
Route::post("register", "RegisterController@store");
Route::patch("register/{register}", "RegisterController@update");
Route::delete("register/{register}", "RegisterController@destroy");
