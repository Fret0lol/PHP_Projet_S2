const jeuxNodeList = document.querySelectorAll('.jeu-collection');
const jeux = [...jeuxNodeList];
console.log(jeux);


    jeux.forEach(jeu => {
        jeu.addEventListener('click',function(e){
            activeJeu(e);
        });
    });

function activeJeu(e){
    jeuClique = e.target;
    let containerJeu = jeuClique.parentNode;
    containerJeu.classList.add('active');
    indexJeuClique = jeux.indexOf(jeuClique);
    console.log(indexJeuClique);
    for(i = 0;i<jeux.length;i++){
        if(i != indexJeuClique){
            jeux[i].style.display = "none";
        }
    }
}

