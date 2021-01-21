<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming - Acceuil</title>
    <link rel="icon" href="<?php echo base_url(); ?>images/gameboy.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleHeader.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleAcceuil.css">
</head>

<body>
    <?php $this->load->view('header') ?>
    
    <div class="container">
        <div class="acceuil">
            <div class="acceuil--img">
                <img src="<?php echo base_url(); ?>images/gameboy.png" alt="gameboy">
            </div>
            <div class="acceuil--text">
                <h1>
                    Découvrez notre collection de jeux vidéo !
                </h1>
                <p>
                    Le site référence pour les amateurs de jeux vidéos et les collectionneurs, rejoignez des milliers de collectionneurs !
                </p>
                <a href="#recherche" class="btn--jeuxVideos">Nos jeux</a>
            </div>
        </div>
    </div>

    <div class="jeux--video--container">
        <div class="recherche--div" id="recherche">
            <input type="text">
            <button>
                <img src="<?php echo base_url(); ?>images/search.svg" alt="">
            </button>
        </div>
        <div class="jeux--video">
            <?php $this->load->view($jeux) ?>
        </div>
        <div class="erreur--recherche">
            <h1>Le jeux que vous cherchez n'est pas disponible ... pour le moment :)</h1>
        </div>
    </div>
    <aside>
        <a href="#top">
            <img src="<?php echo base_url() ?>images/up.svg" alt="up">
        </a>
    </aside>
    <script src="<?php echo base_url(); ?>js/scriptBurger.js"></script>

    <script src="<?php echo base_url(); ?>js/scriptAcceuil.js"></script>
</body>

</html>