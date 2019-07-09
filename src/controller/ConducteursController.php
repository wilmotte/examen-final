<?php

class ConducteursController
{
    // Route: GET conducteurs
    public function list()
    {

        $conducteurs = Conducteur::findAll();
        view('conducteurs.list', compact('conducteurs'));
    }

    // Route: GET conducteurs/add
    public function add()
    {
        view('conducteurs.add');
    }

    // Route: POST conducteurs/add
    public function save()
    {
        $conducteur = new Conducteur;
        $conducteur->setNom($_POST['nom']);
        $conducteur->setPrenom($_POST['prenom']);
        $conducteur->save();

        redirectTo('conducteurs');
    }

    // Route: GET conducteurs/$id/edit
    public function edit($id)
    {
        $conducteur = Conducteur::findOne($id);
        view('conducteurs.edit', compact('conducteur'));
    }

    // Route: POST conducteurs/$id/edit
    public function update($id)
    {
        $conducteur = Conducteur::findOne($id);
        $conducteur->setNom($_POST['nom']);
        $conducteur->setPrenom($_POST['prenom']);
        $conducteur->update();

        redirectTo('conducteurs');
    }

    // Route: GET conducteurs/$id/delete
    public function delete($id)
    {
        $conducteur = Conducteur::findOne($id);
        $conducteur->delete();

        redirectTo('conducteurs');
    }

    // Route: GET conducteurs/$id
    public function show($id)
    {
        view('conducteurs.show');
    }
}
