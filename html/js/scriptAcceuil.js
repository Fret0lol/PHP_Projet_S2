/*-- const pour le header on scroll -*/
const rechercheDiv = document.querySelector(".recherche--div");

/*-- const pr recherche --*/
const rechercheInput = document.querySelector(".recherche--div input");
const titres = document.querySelectorAll(".jeu--video h3");
const containnerJeux = document.querySelector(".jeux--video");
const erreurRecherche = document.querySelector(".erreur--recherche");
const aside = document.querySelector('aside');


window.addEventListener("scroll", function (e) {
	let windowScroll = window.scrollY / 10;
	let heightDiv = rechercheDiv.scrollHeight;
	if (windowScroll >= heightDiv) {
		rechercheDiv.classList.add("scrolled");
		aside.style.display = 'block';
	} else {
		rechercheDiv.classList.remove("scrolled");
		aside.style.display = 'none';
	}
});

rechercheInput.addEventListener("keyup", function (e) {
	let inputValue = rechercheInput.value.toLowerCase();
	console.log(inputValue);
	titres.forEach((titre) => {
		let titreValue = titre.innerHTML.toLowerCase();
		let parentJeu = titre.parentNode;
		let containnerJeu = parentJeu.parentNode;
		if (titreValue.includes(inputValue)) {
			containnerJeu.style.display = "block";
		} else {
			containnerJeu.style.display = "none";
		}
		let Childrens = containnerJeux.children;
		let tabChildren = [...Childrens];
		let displayedChildrens = tabChildren.filter(
			(child) => child.style.display === "block"
		);
		let nbChildrensDisplayed = displayedChildrens.length;
		if (nbChildrensDisplayed === 0) {
			erreurRecherche.style.display = "flex";
		} else {
			erreurRecherche.style.display = "none";
		}
	});
});
