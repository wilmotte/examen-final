<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('conducteurs') ?>">
    < Retour à la liste des conducteurs</a> <form action="<?= url('conducteurs/add') ?>" method="post"><br>

        <div class="form-group">
            <label for="">Nom du conducteur</label>
            <input type="text" name="nom" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Prénom du conducteur</label>
            <input type="text" name="prenom" class="form-control">
        </div>

        <button class="btn btn-success float-right">Créer le conducteur</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>