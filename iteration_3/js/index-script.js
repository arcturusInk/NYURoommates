function directLink() {
	if(document.getElementById('needPlace').checked) {
	    document.getElementById('whichProf').href = "needPlace.php";
	}
	else{
	    document.getElementById('whichProf').href = "havePlace.php";
	}
}

function checkPassword() {
	if (document.getElementById('signUpPasswdID').value == document.getElementById('reEntSignUpPasswdID').value) {
		document.getElementById('passwordHelpBlock').style.color = 'green';
		document.getElementById('passwordHelpBlock').innerHTML = 'Password Matched';
	}
	else{
		document.getElementById('passwordHelpBlock').style.color = 'red';
		document.getElementById('passwordHelpBlock').innerHTML = 'Password Not Matched';
	}
}