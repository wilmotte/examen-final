<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('') ?>">
    < Retour à la page d'accueil</a> <br>
        <a href="<?= url('associations/add') ?>" class="btn btn-sm btn-primary">Ajouter une association</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID du conducteur</th>
                    <th>ID du véhicule</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($associations as $association) :?>
                    <tr>
                        <td><?= $association->getId(); ?></td>
                        <td><?= $association->getConducteur()->getNom(); ?></td>
                        <td><?= $association->getVehicule()->getMarque(); ?></td>
                        <td><a href="<?= url('associations/' . $association->getId() . '/edit') ?>" class="btn btn-warning btn-sm">Éditer</a></td>
                        <td><a href="<?= url('associations/' . $association->getId() . '/delete') ?>" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer cet élément ?)">Supprimer</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>