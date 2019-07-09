<!-- Contenu de la vue -->
<a href="<?= url('conducteurs/' .  $conducteur->getId()) ?>">
    < Retour au conducteur</a> <form action="<?= url('conducteurs/' . $conducteur->getId() . '/edit') ?>" method="post">

        <div class="form-group">
            <label for="">Nom du conducteur</label>
            <input type="text" name="nom" class="form-control" value="<?= $conducteur->getNom() ?>">
        </div>

        <div class="form-group">
            <label for="">Prenom du conducteur</label>
            <input type="text" name="prenom" class="form-control" value="<?= $conducteur->getPrenom() ?>">
        </div>

        <button class="btn btn-warning float-right">Mettre à jour le conducteur</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>