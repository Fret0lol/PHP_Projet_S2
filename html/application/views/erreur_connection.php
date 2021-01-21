<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oupss</title>
</head>
<body>
    <h1>Oupsss</h1>
    <p>Vous n'êtes pas connecte ...</p>
    <a class="btn" href="<?php echo site_url("Gaming/login") ?>">Se connecter</a>
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
    body{
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: #221F1F;
        color: white;
        font-size: 1.5em;
        font-family: 'Poppins';
    }
    .btn{
        background: #e50914;
        color: white;
        text-decoration: none;
        padding: 1em 3em;
        border-radius: 6px;
    }

</style>