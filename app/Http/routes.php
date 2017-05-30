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

    Route::get('/connexion/index', [
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

    // Routes pour l'intranet
    Route::group(['prefix' => 'intranet', 'middleware' => ['auth']], function () {

      Route::get('/', [
            'as' => 'intranetIndex',
            'uses' => 'Intranet\IntranetController@index'
          ]);

      Route::group(['prefix' => 'actualites'], function () {

          Route::get('/', [
            'as' => 'intranetActualitesIndex',
            'uses' => 'Intranet\Actualites\ActualitesController@index'
          ]);

          Route::get('/create', [
            'as' => 'intranetActualitesCreate',
            'uses' => 'Intranet\Actualites\ActualitesController@create'
          ]);

          Route::post('/create', [
            'as' => 'intranetActualitesCreate',
            'uses' => 'Intranet\Actualites\ActualitesController@create'
          ]);

          Route::get('/update/{:id}', [
            'as' => 'intranetActualitesUpdate',
            'uses' => 'Intranet\Actualites\ActualitesController@update'
          ]);

          Route::put('/update/{:id}', [
            'as' => 'intranetActualitesUpdate',
            'uses' => 'Intranet\Actualites\ActualitesController@update'
          ]);

          Route::delete('/delete/{:id}', [
            'as' => 'intranetActualitesDelete',
            'uses' => 'Intranet\Actualites\ActualitesController@update'
          ]);
      });

      Route::group(['prefix' => 'ressourceshumaines'], function () {

        Route::get('/', [
          'as' => 'ressourceshumainesIndex',
          'uses' => 'Intranet\Ressourceshumaines\RessourceshumainesController@index'
          ]);

        /**========================================================
        *
        * Routes pour la partie CRA des Ressources Humaines
        *
        ===========================================================*/

        Route::get('/cras', [
          'as' => 'craIndex',
          'uses' => 'Intranet\Ressourceshumaines\CraController@Index'
        ]);

        Route::get('/cras/nouveau', [
          'as' => 'craNouveau',
          'uses' => 'Intranet\Ressourceshumaines\CraController@createView'
        ]);

        Route::post('/cras/nouveau', [
          'as' => 'craNouveau',
          'uses' => 'Intranet\Ressourceshumaines\CraController@create'
        ]);

        Route::get('/cras/{idCra}', [
          'as' => 'craDetail',
          'uses' => 'Intranet\Ressourceshumaines\CraController@craView'
        ])->where('idCra' , '[0-9]+');

        Route::get('/cras/{idCra}/modifier', [
          'as' => 'craUpdateView',
          'uses' => 'Intranet\Ressourceshumaines\CraController@updateCraView'
        ])->where('idCra' , '[0-9]+');

        Route::post('/cras/{idCra}/modifier', [
          'as' => 'craUpdateView',
          'uses' => 'Intranet\Ressourceshumaines\CraController@updateCra'
        ])->where('idCra' , '[0-9]+');

        Route::get('/cras/{idCra}/evaluation', [
          'as' => 'craEvaluation',
          'uses' => 'Intranet\Ressourceshumaines\CraController@evaluationView'
        ])->where('idCra' , '[0-9]+');


        Route::delete('/cras/{idCra}', [
          'as' => 'crasSuppression',
          'uses' => 'Intranet\Ressourceshumaines\CraController@delete'
        ])->where('idCra' , '[0-9]+');


        /**========================================================
        *
        * Routes pour la partie Notes de frais des Ressources Humaines
        *
        ===========================================================*/

        Route::get('/notesfrais', [
          'as' => 'notesfraisIndex',
          'uses' => 'Intranet\Ressourceshumaines\NotesfraisController@Index'
        ]);

        Route::get('/notesfrais/nouveau', [
          'as' => 'notesFraisNouveau',
          'uses' => 'Intranet\Ressourceshumaines\NotesfraisController@create'
        ]);

        Route::post('/notesfrais/nouveau', [
          'as' => 'notesFraisNouveau',
          'uses' => 'Intranet\Ressourceshumaines\NotesfraisController@createNotesFrais'
        ]);

        Route::delete('/notesfrais/{idNote}', [
          'as' => 'notesFraisSuppression',
          'uses' => 'Intranet\Ressourceshumaines\NotesfraisController@delete'
        ])->where('idNote' , '[0-9]+');

        /**========================================================
        *
        * Routes pour la partie Congés des Ressources Humaines
        *
        ===========================================================*/

        Route::get('/conges', [
          'as' => 'congesIndex',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@index'
        ]);

        Route::get('/conges/{idConges}', [
          'as' => 'congesVisualisation',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@view'
        ])->where('idConges' , '[0-9]+');

        Route::get('/conges/nouveau', [
          'as' => 'congesNouveau',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@create'
        ]);

        Route::post('/conges/nouveau', [
          'as' => 'congesNouveau',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@createConges'
        ]);

        Route::get('/conges/{idConges}/modifier', [
          'as' => 'congesModification',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@updateView'
        ])->where('idConges' , '[0-9]+');

        Route::post('/conges/{idConges}/modifier', [
          'as' => 'congesModification',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@update'
        ])->where('idConges' , '[0-9]+');

        Route::delete('/conges/{idConges}', [
          'as' => 'congesSuppression',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@delete'
        ])->where('idConges' , '[0-9]+');

        Route::get('/conges/{idConges}/validation', [
          'as' => 'congesValidation',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@validationView'
        ])->where('idConges' , '[0-9]+');

        Route::post('/conges/{idConges}/validation', [
          'as' => 'congesValidation',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@validation'
        ])->where('idConges' , '[0-9]+');

        Route::get('/conges/{idConges}/export', [
          'as' => 'congesExport',
          'uses' => 'Intranet\Ressourceshumaines\CongesController@export'
        ])->where('idConges' , '[0-9]+');

        /**========================================================
        *
        * Routes pour la CV-thèque
        *
        ===========================================================*/

        Route::get('/cvtheque', [
          'as' => 'cvthequeIndex',
          'uses' => 'Intranet\Ressourceshumaines\CvthequeController@index'
        ]);


        /**========================================================
        *
        * Routes pour les offres d'emploi/stages
        *
        ===========================================================*/

        Route::get('/offre', [
          'as' => 'offreIndex',
          'uses' => 'Intranet\Ressourceshumaines\OffreController@index'
        ]);


        /**========================================================
        *
        * Routes pour les candidatures
        *
        ===========================================================*/

        Route::get('/candidatures', [
          'as' => 'candidaturesIndex',
          'uses' => 'Intranet\Ressourceshumaines\CandidaturesController@index'
        ]);


        /**========================================================
        *
        * Routes pour les collaborateurs
        *
        ===========================================================*/

        Route::get('/collaborateurs', [
          'as' => 'collaborateursIndex',
          'uses' => 'Intranet\Ressourceshumaines\CollaborateursController@index'
        ]);

      });

      Route::group(['prefix' => 'boiteoutils'], function () {

          Route::get('/', [
            'as' => 'boiteoutilsIndex',
            'uses' => 'Intranet\Boiteoutils\BoiteoutilsController@index'
          ]);

          Route::get('/certifications', [
            'as' => 'boiteOutilsCertificationsIndex',
            'uses' => 'Intranet\Boiteoutils\CertificationsController@index'
          ]);

          Route::get('/documentstravail', [
            'as' => 'boiteOutilsDocumentsTravailIndex',
            'uses' => 'Intranet\Boiteoutils\DocumentsController@index'
          ]);
      });

      Route::group(['prefix' => 'parametrage'], function () {

          Route::get('/', [
            'as' => 'parametrageIndex',
            'uses' => 'Intranet\Parametrage\ParametrageController@index'
          ]);

          Route::get('/ressourceshumaines', [
            'as' => 'parametrageRessourcesHumainesIndex',
            'uses' => 'Intranet\Parametrage\RessourcesController@index'
          ]);

          Route::get('/crm', [
            'as' => 'parametrageCrmIndex',
            'uses' => 'Intranet\Parametrage\CrmController@index'
          ]);
      });

      Route::group(['prefix' => 'administration'], function () {

          Route::get('/', [
            'as' => 'administrationIndex',
            'uses' => 'Intranet\Administration\AdministrationController@index'
          ]);

          Route::get('/gestionutilisateurs', [
            'as' => 'administrationGestionUsersIndex',
            'uses' => 'Intranet\Administration\GestionUsersController@index'
          ]);

			    Route::get('/gestionutilisateurs/ajouterutilisateur', [
		        'as' => 'administrationGestionAddUserIndex',
		        'uses' => 'Intranet\Administration\GestionUsersController@addUser'
		      ]);

            Route::post('/gestionutilisateurs/ajouterutilisateur', [
              'uses' => 'Intranet\Administration\GestionRolesController@addUserPost'
            ]);

			      Route::delete('/gestionutilisateurs/supprimerutilisateur', [
		          'as' => 'administrationGestionDeleteUserIndex',
		          'uses' => 'Intranet\Administration\GestionUsersController@deleteUser'
		        ]);

		      Route::get('/gestionutilisateurs/{idUser}/modifierroles', [
		        'uses' => 'Intranet\Administration\GestionUsersController@updateRoles'
		      ])->where('idUser' , '[0-9]+');

            Route::post('/gestionutilisateurs/{idUser}/modifierroles', [
            'uses' => 'Intranet\Administration\GestionUsersController@addRoleToUserAjax'
            ])->where('idUser' , '[0-9]+');

            Route::delete('/gestionutilisateurs/{idUser}/modifierroles', [
            'uses' => 'Intranet\Administration\GestionUsersController@deleteRoleToUserAjax'
            ])->where('idUser' , '[0-9]+');

		      Route::get('/gestionroles', [
            'as' => 'administrationGestionRolesIndex',
            'uses' => 'Intranet\Administration\GestionRolesController@index'
          ]);

          Route::get('/gestionroles/{idRole}/modifierressources', [
            'uses' => 'Intranet\Administration\GestionRolesController@updateRessources'
          ])->where('idRole' , '[0-9]+');

          Route::get('/gestionroles/ajouterrole', [
            'uses' => 'Intranet\Administration\GestionRolesController@addRole'
          ]);

            Route::post('/gestionroles/ajouterrole', [
              'uses' => 'Intranet\Administration\GestionRolesController@addRolePost'
            ]);

          Route::get('/application', [
            'as' => 'administrationApplicationIndex',
            'uses' => 'Intranet\Administration\ApplicationController@index'
          ]);


      });
        
    });

});

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');


