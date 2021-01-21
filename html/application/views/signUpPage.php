<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url(); ?>images/gameboy.png">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/styleSignUp.css">
    <title>Inscription Form</title>
</head>

<body>

    <form action="<?php echo site_url('Gaming/registration'); ?>" method="POST">
    <div class="form_header">
        <a href="<?php echo site_url('Gaming/index');?>">
            <img src="<?php echo base_url();?>images/Logo.png" alt="logo" height="60px">
        </a>
        <h1>Inscription</h1>
    </div>
    <div class="form_content">
          <div class="form_line">
              <label>Civilité :</label>
              <div class="civilite">
                <input type="text" placeholder="Nom" name="last_name" required>
                <input type="text" placeholder="Prenom" name="first_name" required>
              </div>
          </div>
          <div class="form_line">
              <label>Identifiant :</label>
              <div class="identifiant">
                <input type="text" placeholder="Identifiant" name="id" required>
                <p style="color : #e50914"><?php echo $errorId ?></p>
              </div>
          </div>
          <div class="form_line">
              <label >Mot de passe :</label>
                <div class="motDePasse">
                    <input type="password" placeholder="Mot de passe" name="password" required>
                    <input type="password" placeholder="Confirmer le mot de passe" name="password_confirm" required>
                    <p style="color : #e50914" ><?php echo $errorMdp ?></p>
                </div>

          </div>
        <button class="noselect">
            S'inscrire
        </button>
        <p>Déjà incrit ? <a href="<?php echo site_url('Gaming/login');?>" id="lienLogin">Connectez-vous</a></p>
    </div>
    </form>
</body>
<style>
    form{
        width: 50%;
    }
    @media screen and (max-width : 800px){
        form{
            height: 100vh;
            width: 100%;
            border-radius: 0;
        }
        .form--header{
            margin: 0;
        }
    }
</style>
</html>