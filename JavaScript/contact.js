function validateForm(){
	var valid=1;

	var email=document.getElementById('email');
	var email_validation=document.getElementById("email_validation");

	var name=document.getElementById('name');
	var name_validation=document.getElementById("name_validation");

	var message_validation=document.getElementById("message_validation");

	var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	var surname=document.getElementById('surname');
	var surname_validation=document.getElementById("surname_validation");

	var telephone=document.getElementById('telephone');
	var telephone_validation=document.getElementById("telephone_validation");

	var r=document.getElementsByName("gjinia");
	var gender_validation=document.getElementById("gender_validation");

	if(name.value==="") {
		valid=0;
		name_validation.innerHTML="Ju lutem mbusheni fushen Emri";
		name_validation.style.display="block";
		name_validation.parentNode.style.backgroundColor="#FFDFDF";
	}
	else {
		name_validation.style.display="none";
		name_validation.parentNode.style.backgroundColor="transparent";
	}

	if(surname.value==="") {
		valid=0;
		surname_validation.innerHTML="Ju lutem mbusheni fushen Mbiemri";
		surname_validation.style.display="block";
		surname_validation.parentNode.style.backgroundColor="#FFDFDF";
	}
	else {
		surname_validation.style.display="none";
		surname_validation.parentNode.style.backgroundColor="transparent";
	}

	if(telephone.value==="") {
		valid=0;
		telephone_validation.innerHTML="Ju lutem mbusheni fushen Telefoni";
		telephone_validation.style.display="block";
		telephone_validation.parentNode.style.backgroundColor="#FFDFDF";
	}
	else {
		telephone_validation.style.display="none";
		telephone_validation.parentNode.style.backgroundColor="transparent";
	}

	var c=-1;
	for (var i = 0; i < r.length; i++) {
		if(r[i].checked) {
			c=i;
		}
	}
	if(c == -1) {
		valid=0;
		gender_validation.innerHTML="Ju lutem zgjedheni Gjinine";
		gender_validation.style.display="block";
		gender_validation.parentNode.style.backgroundColor="#FFDFDF"
	}
	else {
		gender_validation.style.display="none";
		gender_validation.parentNode.style.backgroundColor="transparent";
	}

	if(message.value==="") {
		valid=0;
		message_validation.innerHTML="Ju lutem mbusheni fushen Mbiemri";
		message_validation.style.display="block";
		message_validation.parentNode.style.backgroundColor="#FFDFDF";
	}
	else {
		message_validation.style.display="none";
		message_validation.parentNode.style.backgroundColor="transparent";
	}

	if(email.value==="") {
		valid=0;
		email_validation.innerHTML="Ju lutem mbusheni fushen Email";
		email_validation.style.display="block";
		email_validation.parentNode.style.backgroundColor="#FFDFDF";
	}
	else {
		email_validation.style.display="none";
		email_validation.parentNode.style.backgroundColor="transparent";
	}

	if(!valid) {
		return false;
	}
}