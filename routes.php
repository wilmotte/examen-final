<?php

// Create Router instance
$router = new Router();


$router->get('',                'PagesController@home' );
// $router->get('examples',        'ExamplesController@list');
// $router->get('examples/add',    'ExamplesController@add');
// $router->post('examples/add',   'ExamplesController@save');


$router->get('conducteurs',             'ConducteursController@list');    // Liste des conducteurs
$router->get('conducteurs/add',         'ConducteursController@add');      // Ajout (affichage formulaire)
$router->post('conducteurs/add',        'ConducteursController@save');      // Ajout (traitement formulaire)
$router->get('conducteurs/{id}/edit',   'ConducteursController@edit');     // Édition (affichage formulaire)
$router->post('conducteurs/{id}/edit',  'ConducteursController@update');   // Édition (traitement formulaire)
$router->get('conducteurs/{id}/delete', 'ConducteursController@delete');   // Suppression
$router->get('conducteurs/{id}',        'ConducteursController@show');     // Affichage d'un conducteur

/** Model: Course */
$router->get('vehicules',               'VehiculesController@list');    // Liste des vehicules
$router->get('vehicules/add',           'VehiculesController@add');      // Ajout (affichage formulaire)
$router->post('vehicules/add',          'VehiculesController@save');      // Ajout (traitement formulaire)
$router->get('vehicules/{id}/edit',     'VehiculesController@edit');     // Édition (affichage formulaire)
$router->post('vehicules/{id}/edit',    'VehiculesController@update');   // Édition (traitement formulaire)
$router->get('vehicules/{id}/delete',   'VehiculesController@delete');   // Suppression
$router->get('vehicules/{id}',          'VehiculesController@show');     // Affichage d'un vehicule

/** Model: Registration */
$router->get('associations',             'AssociationsController@list');    // Liste des associations
$router->get('associations/add',         'AssociationsController@add');      // Ajout (affichage formulaire)
$router->post('associations/add',        'AssociationsController@save');      // Ajout (traitement formulaire)
$router->get('associations/{id}/edit',   'AssociationsController@edit');     // Édition (affichage formulaire)
$router->post('associations/{id}/edit',  'AssociationsController@update');   // Édition (traitement formulaire)
$router->get('associations/{id}/delete', 'AssociationsController@delete');   // Suppression
$router->get('associations/{id}',        'AssociationsController@show');     // Affichage d'une association









// Run it!
$router->run();