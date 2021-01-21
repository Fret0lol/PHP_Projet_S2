<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection de <?php echo $_SESSION['prenom']; ?></title>
    <link rel="icon" href="<?php echo base_url(); ?>images/gameboy.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleHeader.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleCollection.css">
</head>

<body>
    <?php $this->load->view('header') ?>

    <div class="acceuil">
        <p>
            Bonjour <span><?php echo $_SESSION['prenom']; ?></span>, voici votre collection :
        </p>
    </div>
    <div class="collection-jeux">
        <?php $this->load->view($collection) ?>
    </div>
    <aside>
        <a href="<?php echo site_url('Gaming/index') ?>"><img src="<?php echo base_url() ?>images/Plus.svg" alt="plus"></a>

    </aside>
    <script src="<?php echo base_url(); ?>js/scriptBurger.js"></script>

    <script src="<?php echo base_url() ?>js/scriptCollection.js"></script>
</body>

</html>