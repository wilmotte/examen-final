<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('vehicules') ?>">
    < Retour à la liste des vehicules</a> <form action="<?= url('vehicules/add') ?>" method="post"><br>

        <div class="form-group">
            <label for="">Marque du véhicule</label>
            <input type="text" name="marque" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Modèle du véhicule</label>
            <input type="text" name="modele" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Couleur du véhicule</label>
            <input type="text" name="couleur" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Immatriculation du véhicule</label>
            <input type="text" name="immatriculation" class="form-control">
        </div>

        <button class="btn btn-success float-right">Créer le véhicule</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>