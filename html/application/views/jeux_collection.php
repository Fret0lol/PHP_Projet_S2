<?php foreach ($jeux as $jeu) : ?>
            <div class="jeu-container">
                <div class="jeu-collection">
                    <img src="<?php echo $jeu[0]['couverture'] ?>" alt="<?php echo $jeu[0]['titre'] ?>">
                </div>
                <div class="jeu-info">
                    
                    <div class="info">
                        <div class="info-content">
                        <h1><?php echo $jeu[0]['titre'] ?></h1>
                        <p><?php echo $jeu[0]['description'] ?></p>
                        </div>

                        <form action="<?php echo site_url('Collection/supprimerJeu'); ?>" method="POST" class="jeu-btn">
                            <input type="hidden" value="<?php echo $jeu[0]['id'] ?> " name="id_jeu">
                            <input type="submit" value="Supprimer jeu" class="jeu-btn-supprimer">
                        </form>
                        <a class="retour" href="<?php echo site_url('Collection/index') ?>">Retour</a>
                  
                      
                    </div>
                </div>
            </div>
<?php endforeach ?>