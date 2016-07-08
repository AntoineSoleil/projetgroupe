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

Route::group(['middleware' => ['web']], function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::get('/', [
      'as' => 'accueilIndex',
      'uses' => 'AccueilController@index'
    ]);

    Route::get('/actualites/index', [
      'as' => 'actualitesIndex',
      'uses' => 'ActualitesController@index'
    ]);

    Route::get('/collaborateurs/index', [
      'as' => 'collaborateursIndex',
      'uses' => 'CollaborateursController@index'
    ]);

    Route::get('/conges/index', [
      'as' => 'congesIndex',
      'uses' => 'CongesController@index'
    ]);

    Route::get('/connexion/index', [
      'as' => 'connexionIndex',
      'uses' => 'ConnexionController@index'
    ]);

    Route::get('/contact/index', [
      'as' => 'contactIndex',
      'uses' => 'ContactController@index'
    ]);

    Route::get('/inscriptions/index', [
      'as' => 'inscriptionsIndex',
      'uses' => 'InscriptionsController@index'
    ]);

    Route::get('/recrutement/index', [
      'as' => 'recrutementsIndex',
      'uses' => 'RecrutementsController@index'
    ]);

    Route::get('/activite/index', [
      'as' => 'activiteIndex',
      'uses' => 'ActiviteController@index'
    ]);

    Route::get('/groupe/index', [
      'as' => 'groupeIndex',
      'uses' => 'GroupeController@index'
    ]);

    Route::get('/recherche/index', [
      'as' => 'rechercheIndex',
      'uses' => 'RechercheController@index'
    ]);

    Route::get('/plansite/index', [
      'as' => 'plansiteIndex',
      'uses' => 'PlansiteController@index'
    ]);



});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
