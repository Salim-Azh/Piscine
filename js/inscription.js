(function() { //IIFE :Immediately-Invoked Function Expression
	document.getElementById('envoi').disabled = true

	var type = document.getElementById('type')
	var studentform = document.getElementById('stu_inscription')
	var profform = document.getElementById('adm_inscription')
	var stuinput = studentform.querySelector('input')
	var stuselect = studentform.querySelectorAll('select')

	type.addEventListener('mouseup',function(e){
		console.log(stuinput)
		Array.prototype.forEach.call(stuselect, function(select) {
			console.log(select)
		});

        if(type.options[type.selectedIndex].value == 0){
			document.getElementById('envoi').disabled = true

			stuinput.required=false
			Array.prototype.forEach.call(stuselect, function(select) {
				select.required=false
			});
			studentform.style.display = 'none'
			profform.style.display = 'none'
		}
		else if (type.options[type.selectedIndex].value == 'Eleve') {
			document.getElementById('envoi').disabled = false

			if(studentform.style.display =="none"){
			//si c'est le cas on vérifie d'abord que la partie enseignant soit cachée elle aussi et si ce n'est pas le cas on la fait disparaitre
			if (profform.style.display !="none") {
				$(profform).toggle("slow");
			}
			//on affiche ensuite la partie eleve
			$(studentform).toggle("slow");
		}

			stuinput.required=true
			Array.prototype.forEach.call(stuselect, function(select) {
				select.required=true
			});
		}
		else if (type.options[type.selectedIndex].value == 'Enseignant') {
			document.getElementById('envoi').disabled = false

			stuinput.required=false
			Array.prototype.forEach.call(stuselect, function(select) {
				select.required=false
			});

			if(profform.style.display =="none"){
			//si c'est le cas on vérifie d'abord que la partie enseignant soit cachée elle aussi et si ce n'est pas le cas on la fait disparaitre
				if (studentform.style.display !="none") {
					$(studentform).toggle("slow");
				}
			//on affiche ensuite la partie eleve
			$(profform).toggle("slow");
		}
		}

    })
})()