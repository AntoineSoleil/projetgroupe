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

    Route::get('/recrutements/index', [
      'as' => 'recrutementsIndex',
      'uses' => 'RecrutementsController@index'
    ]);

    Route::get('/collaborateurs/index', [
      'as' => 'collaborateursIndex',
      'uses' => 'CollaborateursController@index'
    ]);

    Route::group(['prefix' => 'intranet'], function () {

      Route::get('/index', [
            'as' => 'intranetIndex',
            'uses' => 'Intranet\IntranetController@index'
          ]);

      Route::group(['prefix' => 'actualites'], function () {

          Route::get('/index', [
            'as' => 'actualitesIndex',
            'uses' => 'Intranet\Actualites\ActualitesController@index'
          ]);

          Route::get('/create', [
            'as' => 'actualitesCreate',
            'uses' => 'Intranet\Actualites\ActualitesController@create'
          ]);

          Route::post('/create', [
            'as' => 'actualitesCreate',
            'uses' => 'Intranet\Actualites\ActualitesController@create'
          ]);

          Route::get('/update/{id}', [
            'as' => 'actualitesUpdate',
            'uses' => 'Intranet\Actualites\ActualitesController@update'
          ]);

          Route::put('/update/{id}', [
            'as' => 'actualitesUpdate',
            'uses' => 'Intranet\Actualites\ActualitesController@update'
          ]);

          Route::delete('/delete/{id}', [
            'as' => 'actualitesDelete',
            'uses' => 'Intranet\Actualites\ActualitesController@update'
          ]);
      });

      Route::group(['prefix' => 'ressourceshumaines'], function () {

        Route::get('/index', [
          'as' => 'ressourceshumainesIndex',
          'uses' => 'Intranet\Ressourceshumaines\RessourceshumainesController@index'
          ]);

        Route::get('/cra', [
          'as' => 'craIndex',
          'uses' => 'Intranet\Ressourceshumaines\CraController@Index'
        ]);

        Route::get('/notesfrais', [
          'as' => 'notesfraisIndex',
          'uses' => 'Intranet\Ressourceshumaines\NotesfraisController@Index'
        ]);

        Route::get('/conges', [
          'as' => 'congesIndex',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@index'
        ]);

        Route::get('/cvtheque', [
          'as' => 'cvthequeIndex',
          'uses' => 'Intranet\Ressourceshumaines\CvthequeController@index'
        ]);

        Route::get('/offre', [
          'as' => 'offreIndex',
          'uses' => 'Intranet\Ressourceshumaines\OffreController@index'
        ]);

        Route::get('/candidatures', [
          'as' => 'candidaturesIndex',
          'uses' => 'Intranet\Ressourceshumaines\CandidaturesController@index'
        ]);

        Route::get('/collaborateurs/index', [
          'as' => 'collaborateursIndex',
          'uses' => 'Intranet\Ressourceshumaines\CollaborateursController@index'
        ]);

      });

      Route::group(['prefix' => 'boiteoutils'], function () {

          Route::get('/index', [
            'as' => 'boiteoutilsIndex',
            'uses' => 'Intranet\Boiteoutils\BoiteoutilsController@index'
          ]);

          Route::get('/certifications', [
            'as' => 'certificationsIndex',
            'uses' => 'Intranet\Boiteoutils\BoiteoutilsController@certifications'
          ]);

          Route::get('/documentstravail', [
            'as' => 'documentstravailIndex',
            'uses' => 'Intranet\Boiteoutils\BoiteoutilsController@documents'
          ]);
      });

      Route::group(['prefix' => 'parametrage'], function () {

          Route::get('/index', [
            'as' => 'parametrageIndex',
            'uses' => 'Intranet\Parametrage\ParametrageController@index'
          ]);

          Route::get('/ressourceshumaines', [
            'as' => 'parametrageRessourceshumaines',
            'uses' => 'Intranet\Parametrage\ParametrageController@ressourceshumaines'
          ]);

          Route::get('/crm', [
            'as' => 'parametrageCrm',
            'uses' => 'Intranet\Parametrage\ParametrageController@crm'
          ]);
      });

      Route::group(['prefix' => 'administration'], function () {

          Route::get('/index', [
            'as' => 'administrationIndex',
            'uses' => 'Intranet\Administration\AdministrationController@index'
          ]);

          Route::get('/gestionutilisateurs', [
            'as' => 'administrationGestion',
            'uses' => 'Intranet\Administration\AdministratinController@gestionusers'
          ]);

          Route::get('/application', [
            'as' => 'administrationApplication',
            'uses' => 'Intranet\Administration\AdministrationController@Application'
          ]);
      });
        
    });

});

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');


