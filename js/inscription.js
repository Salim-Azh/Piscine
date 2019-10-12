function register(val){
	// On vérifie que le select est sur etudiant et que celui ci est bien caché
	if((val=="Eleve") && (document.getElementById('inscription_eleve').style.display =="none")){
		//si c'est le cas on vérifie d'abord que la partie enseignant soit cachée elle aussi et si ce n'est pas le cas on la fait disparaitre
		if (document.getElementById('inscription_enseignant').style.display !="none") {
			$(document.getElementById('inscription_enseignant')).toggle("slow");
		}
		//on affiche ensuite la partie eleve
		$(document.getElementById('inscription_eleve')).toggle("slow");
	}
	//meme principe pour enseignant
	else if((val=="Enseignant") && (document.getElementById('inscription_enseignant').style.display =="none")){

		if (document.getElementById('inscription_eleve').style.display !="none") {
			$(document.getElementById('inscription_eleve')).toggle("slow");
		}
		$(document.getElementById('inscription_enseignant')).toggle("slow");
	}
}
