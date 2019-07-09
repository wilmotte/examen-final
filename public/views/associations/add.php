<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('associations') ?>">
    < Retour à la liste des associations</a> <form action="<?= url('associations/add') ?>" method="post">

        <div class="form-group">
            <label for="">Choix du conducteur</label>
            <select name="conducteur_id" class="form-control">
                <option selected disabled>Choisir un conducteur...</option>
                <?php foreach ($conducteurs as $conducteur) : ?>
                    <option value="<?= $conducteur->getId() ?>"><?= $conducteur->getNom(); ?> (<?= $conducteur->getPrenom(); ?>)</option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Choix du véhicule</label>
            <select name="vehicule_id" class="form-control">
                <option selected disabled>Choisir un véhicule...</option>
                <?php foreach ($vehicules as $vehicule) : ?>
                    <option value="<?= $vehicule->getId() ?>"><?= $vehicule->getMarque(); ?> (<?= $vehicule->getModele(); ?>)</option>
                <?php endforeach; ?>
            </select>
        </div>

        <button class="btn btn-success float-right">Créer l'association</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>