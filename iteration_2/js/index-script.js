function directLink() {
	if(document.getElementById('needPlace').checked) {
	    document.getElementById('whichProf').href = "needPlace.php";
	}
	else{
	    document.getElementById('whichProf').href = "havePlace.php";
	}
}