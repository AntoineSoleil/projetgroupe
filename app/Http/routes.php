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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');


    Route::get('/', [
      'as' => 'accueilIndex',
      'uses' => 'AccueilController@index'
    ]);

    Route::get('/contact/index', [
      'as' => 'contactIndex',
      'uses' => 'ContactController@index'
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

    Route::group(['prefix' => 'intranet'], function () {

      Route::group(['prefix' => 'actualites'], function () {

          Route::get('/index', [
            'as' => 'actualitesIndex',
            'uses' => 'ActualitesController@index'
          ]);

          Route::get('/create', [
            'as' => 'actualitesIndex',
            'uses' => 'ActualitesController@create'
          ]);

          Route::post('/create', [
            'as' => 'actualitesIndex',
            'uses' => 'ActualitesController@create'
          ]);

          Route::get('/update/{id}', [
            'as' => 'actualitesIndex',
            'uses' => 'ActualitesController@update'
          ]);

          Route::put('/update/{id}', [
            'as' => 'actualitesIndex',
            'uses' => 'ActualitesController@update'
          ]);

          Route::delete('/delete/{id}', [
            'as' => 'actualitesIndex',
            'uses' => 'ActualitesController@update'
          ]);
      });

      Route::group(['prefix' => 'ressourceshumaines'], function () {

        Route::get('/index', [
          'as' => 'ressourceshumainesIndex',
          'uses' => 'RessourceshumainesController@index'
          ]);

        Route::get('/cra', [
          'as' => 'craIndex'
          'uses' => 'CraController@Index'
        ]);

        Route::get('/notesfrais', [
          'as' => 'notesfraisIndex'
          'uses' => 'NotesfraisController@Index'
        ]);

        Route::get('/conges', [
          'as' => 'congesIndex',
          'uses' => 'CongesController@index'
        ]);

        Route::get('/cvtheque', [
          'as' => 'cvthequeIndex',
          'uses' => 'CvthequeController@index'
        ]);

        Route::get('/offre', [
          'as' => 'offreIndex',
          'uses' => 'OffreController@index'
        ]);

        Route::get('/candidatures', [
          'as' => 'candidaturesIndex',
          'uses' => 'CandidaturesController@index'
        ]);

        Route::get('/collaborateurs/index', [
          'as' => 'collaborateursIndex',
          'uses' => 'CollaborateursController@index'
        ]);

      });

      Route::group(['prefix' => 'boiteoutils'], function () {

          Route::get('/index', [
            'as' => 'actualitesIndex',
            'uses' => 'BoiteoutilsController@index'
          ]);

          Route::get('/certifications', [
            'as' => 'certificationsIndex',
            'uses' => 'BoiteoutilsController@certifications'
          ]);

          Route::get('/documentstravail', [
            'as' => 'documentstravailIndex',
            'uses' => 'BoiteoutilsController@documents'
          ]);
      });

      Route::group(['prefix' => 'parametrage'], function () {

          Route::get('/index', [
            'as' => 'parametrageIndex',
            'uses' => 'ParametrageController@index'
          ]);

          Route::get('/ressourceshumaines', [
            'as' => 'parametrageRessourceshumaines',
            'uses' => 'ParametrageController@ressourceshumaines'
          ]);

          Route::get('/crm', [
            'as' => 'parametrageCrm',
            'uses' => 'ParametrageController@crm'
          ]);
      });

      Route::group(['prefix' => 'administration'], function () {

          Route::get('/index', [
            'as' => 'administrationIndex',
            'uses' => 'AdministrationController@index'
          ]);

          Route::get('/gestionutilisateurs', [
            'as' => 'administrationGestion',
            'uses' => 'AdministratinController@gestionusers'
          ]);

          Route::get('/application', [
            'as' => 'administrationApplication',
            'uses' => 'AdministrationController@Application'
          ]);
      });
        
    });

});

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');


