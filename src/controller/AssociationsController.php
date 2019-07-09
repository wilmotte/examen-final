<?php

class AssociationsController
{
    // Route: GET associations
    public function list()
    {

        $associations = Association::findAll();
        view('associations.list', compact('associations'));
    }

    // Route: GET associations/add
    public function add()
    {

        $conducteurs = Conducteur::findAll();
        $vehicules = Vehicule::findAll();
        view('associatons.add', compact('conducteurs', 'vehicules'));
    }

    // Route: POST associations/add
    public function save()
    {
        $association = new Association;
        $association->setConducteurId($_POST['conducteur_id']);
        $association->setVehiculeId($_POST['vehicule_id']);
        $association->save();

        redirectTo('associations');
    }

    // Route: GET associations/$id/edit
    public function edit($id)
    {
        $conducteurs = Conducteur::findAll();
        $vehicules = Vehicule::findAll();
        $association = Association::findOne($id);
        view('associations.edit', compact('association', 'conducteurs', 'vehicules'));
    }

    // Route: POST associations/$id/edit
    public function update($id)
    {
        $association = Association::findOne($id);
        $association->setConducteurId($_POST['conducteur_id']);
        $association->setVehiculeId($_POST['vehicule_id']);
        $association->update();

        redirectTo('associations');
    }

    // Route: GET associations/$id/delete
    public function delete($id)
    {
        $conducteur = Association::findOne($id);
        $conducteur->delete();

        redirectTo('associations');
    }

    // Route: GET associations/$id
    public function show($id)
    {
        view('associations.show');
    }
}
