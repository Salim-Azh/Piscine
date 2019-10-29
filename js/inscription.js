(function() { //IIFE :Immediately-Invoked Function Expression
	document.getElementById('envoi').disabled = true

	var type = document.getElementById('type')
	var studentform = document.getElementById('stu_inscription')
	var profform = document.getElementById('adm_inscription')

	type.addEventListener('mouseup',function(e){
        if(type.options[type.selectedIndex].value == 0){
			studentform.style.display = 'none'
			profform.style.display = 'none'
			document.getElementById('envoi').disabled = true
		}
		else if (type.options[type.selectedIndex].value == 'Eleve') {
			profform.style.display = 'none'
			studentform.style.display = 'block'
			document.getElementById('envoi').disabled = false
		}
		else if (type.options[type.selectedIndex].value == 'Enseignant') {
			studentform.style.display = 'none'
			profform.style.display = 'block'
			document.getElementById('envoi').disabled = false
		}

    })
})()