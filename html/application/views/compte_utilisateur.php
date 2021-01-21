<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compte de <?php echo $_SESSION['identifiant'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url(); ?>images/gameboy.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleHeader.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/styleAccount.css">
</head>

<body>
    <?php $this->load->view('header') ?>
    <div class="container">
        <h1>Votre compte : </h1>
        <ul>
            <li><span>Nom </span>: <?php echo $_SESSION['nom'] ?></li>
            <li><span>Prenom </span>: <?php echo $_SESSION['prenom'] ?></li>
            <li><span>Identifiant </span>: <?php echo $_SESSION['identifiant'] ?></li>
            <li><span>Mot de passe </span>: <?php echo $_SESSION['motDePasse'] ?></li>
        </ul>
        <a href="<?php echo site_url('Gaming/logout') ?>">Se déconnecter</a>
    </div>
    <script src="<?php echo base_url(); ?>js/scriptBurger.js"></script>

</body>

</html>