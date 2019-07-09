<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('associations') ?>">
    < Retour à l'association</a> <form action="<?= url('associations/' . $association->getId() . '/edit') ?>" method="post">

        <div class="form-group">
            <label for="">Choix du conducteur</label>
            <select name="conducteur_id" class="form-control">
                <?php foreach ($conducteurs as $conducteur) : ?>
                    <option value="<?= $conducteur->getId() ?>" <?= ($association->getConducteurId() == $conducteur->getId() ? 'selected' : '') ?>>
                        <?= $conducteur->getNom(); ?> (<?= $conducteur->getPrenom(); ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="courseForm">Choix du véhicule</label>
            <select name="vehicule_id" class="form-control">
                <?php foreach ($vehicules as $vehicule) : ?>
                    <option value="<?= $vehicule->getId() ?>" <?= ($association->getVehiculeId() == $vehicule->getId() ? 'selected' : '') ?>>
                        <?= $vehicule->getMarque(); ?> (<?= $vehicule->getModele(); ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button class="btn btn-warning float-right">Mettre à jour l'association</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>