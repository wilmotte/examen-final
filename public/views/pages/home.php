<?php ob_start(); ?>

<h1>Bienvenue sur mon site de location de véhicules</h1>

<p>
    Des belles voitures rien que pour toi !
</p>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>