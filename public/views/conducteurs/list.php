<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('') ?>">
    < Retour à la page d'accueil</a> <br>
        <a href="<?= url('conducteurs/add') ?>" class="btn btn-sm btn-primary">Ajouter un conducteur</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach ($conducteurs as $conducteur) : ?>
                    <tr>
                        <td><?= $conducteur->getId(); ?></td>
                        <td><?= $conducteur->getNom(); ?></td>
                        <td><?= $conducteur->getPrenom(); ?></td>

                        <td><a href="<?= url('conducteurs/' . $conducteur->getId() . '/edit') ?>" class="btn btn-warning btn-sm">Éditer</a></td>
                        <td><a href="<?= url('conducteurs/' . $conducteur->getId() . '/delete') ?>" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer cet élément ?)">Supprimer</a></td>
                    </tr>
                <?php endforeach; ?>
                </tr>
            </tbody>
        </table>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>