<!DOCTYPE html>
<html>
<head>
    <title>Error 404 page not found</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
        *{margin: 0; padding: 0;}

        body {
            background-color: #221F1F;
            color: #E50914;
            font-family: "Montserrat", sans-serif;
        }

        h1 {
            text-align: center;
            font-size: 40vh;
        }

        h2 {
            text-align: center;
            font-size: 10vh;
        }

        footer {
            color: #757575;
        }

        .f_bande {
            background-color: #757575;
            height: 10px;
            margin: 5vh 0;
        }

        .f_result {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        #f_copyr {
            display: flex;
            flex-direction: row;
        }

        #f_follow {
            display: flex;
            flex-direction: column;
        }

        #f_legal {
            display: flex;
            flex-direction: column;
        }

        #f_navig {
            display: flex;
            flex-direction: column;
        }

        .f_li_title {
            font-size: 2vh;
            font-weight: bold;
            margin-bottom: 2vh;
        }

        .f_listes {
            list-style-type: none;
        }

        .f_listes > li {
            font-size: 1.5vh;
            margin-bottom: 1vh;
        }

        .f_listes > li > a {
            color: #757575;
            text-decoration: none;
        }

        .f_listes > li > a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <h1>404</h1>
    <h2>Page not found</h2>

    <footer>
        <div class="f_bande">
        </div>
        <div class="f_result">
            <div>
                <div id="f_copyr">
                    <img src="<?php echo base_url(); ?>images/Logo_nb.png" title="logo_grisé" alt="logo grisé" width="108" height="43"/>
                    <p>©, France</p>
                </div>
            </div>
            <div>
                <div id="f_follow">
                    <p class="f_li_title">SUIVEZ NOUS</p>
                    <ul class="f_listes">
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">Twitter</a></li>
                        <li><a href="">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div id="f_legal">
                    <p class="f_li_title">LEGAL</p>
                    <ul class="f_listes">
                        <li><a href="">Mentions Légales</a></li>
                        <li><a href="">Politique de confidentialité</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div id="f_navig">
                    <p class="f_li_title">NAVIGATION</p>
                    <ul class="f_listes">
                        <li><a href="<?php echo site_url('Gaming/login'); ?>">Se connecter</a></li>
                        <li><a href="<?php echo site_url('Gaming/signUp'); ?>">S'inscrire</a></li>
                        <li><a href="<?php echo site_url('Gaming/afficheJeuxVideo'); ?>">Nos jeux</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
