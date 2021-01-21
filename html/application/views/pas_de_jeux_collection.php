<div class="pas-de-jeux">
<p>Pas de jeux dans votre collection :( </p>
<a href="<?php echo site_url('Gaming/index') ?>">Ajouter des jeux !</a>
</div>


<style>
    .pas-de-jeux{
        width: 100%;
        display: flex;
        background-color: red;
        justify-content: space-around;
        flex-direction: column;
        align-items: center;
        color: white;
        background: transparent;
        font-size: 1.3rem;
    }
    .pas-de-jeux a{
        color: inherit;
        text-decoration: none;
        padding: 1.5em 2em;
        background-color: #e50914;
        border-radius: 8px ;
        font-size: 1rem;
        transition: all 0.5s ease;
    }
</style>