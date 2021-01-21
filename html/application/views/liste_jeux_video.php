<?php foreach ($jeuxVideo as $jeux) : ?>
    <div class="containner--jeu">
        <div class="jeu--video">
            <img loading="lazy" src="<?php echo $jeux['couverture'] ?>" alt="<?php echo $jeux['titre'] ?>">
            <h3><?php echo $jeux['titre'] ?></h3>
            <form action="<?php echo site_url('Gaming/ajouterJeuCollection'); ?>" method="POST">
                <input type="hidden" name="id_jeu" value="<?php echo $jeux['id'] ?>">
                <input class="btn-ajout" type="submit" value="+">
            </form>
        </div>
        <div class="jeu--video--info">
            <p class="jeu--description"><?php echo $jeux['description'] ?></p>
            <p class="jeu--sortie">Date de sortie : <?php echo $jeux['sortie'] ?></p>
        </div>
    </div>

<?php endforeach ?>