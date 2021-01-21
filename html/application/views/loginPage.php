<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url(); ?>images/gameboy.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/styleLogin.css">
    <title>Gaming : Connexion</title>
</head>

<body>

    <form action="<?php echo site_url('Gaming/loginConnection'); ?>" method="POST">
        <div class="form_header">
            <div class="form_header_logo">
                <a href="<?php echo site_url('Gaming/index');?>">
                    <img src="<?php echo base_url();?>images/Logo.png" alt="logo" height="60px">
                </a>
            </div>
            <h1>Connexion</h1>
        </div>
        <div class="form_body">
            <label for="">
                <input type="text" name="id" placeholder=" ">
                <p>Identifiant</p>
            </label>
            <p class="error_message"><?php echo $errorId ?></p>
            <label for="">
                <input type="password" name="password" placeholder=" ">
                <p>Mot de passe</p>
                <div class="password-icon">
                    <i data-feather="eye"></i>
                    <i data-feather="eye-off"></i>
                </div>
            </label>
            <p class="error_message"><?php echo $errorMdp ?></p>
            <button class="noselect">
                Se connecter
            </button>
            <p>Première fois ? <a href="<?php echo site_url('Gaming/signUp');?>">S'enregistrer</a></p>
        </div>


    </form>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
    <script src="<?php echo base_url(); ?>js/scriptLogin.js"></script>
</body>

</html>