<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('salut', function(){
    return "Salut les gens !";
});

Route::get('salut/{slug}-{id}', ["as" => "salutoto", function($name, $id){
    return "Lien :" . route("salutoto", ["name" => $name, "id" => $id]);
}])->where('name', "[a-z0-9]*")
    ->where("id", "[0-9]*")
;

Route::group(["prefix" => "admin", "middleware" =>  "ip"], function(){
    Route::get("salut", function(){
        Return "salut les gars";
    });
});*/


//Route::get("a-propos", ["as" => "about" ,"uses" => "PagesController@about"]);

//Route::get('/salut/{name}', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

//Route::controller('welcome', 'welcomeController');


Route::get('/', 'WelcomeController@index');


Route::resource('link', 'LinksController', ['only' => ['create', 'store']]);
Route::get('r/{link}', ['as' => 'link.show', 'uses' => 'LinksController'])->where('link', '[0-9]+');

//Route::get('links/create', 'LinksController@create');
//
//Route::post('links/create', 'LinksController@store');
//
//Route::get('r/{id}', 'LinksController@show')->where('id', '[0-9]+');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
