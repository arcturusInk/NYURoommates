<?php 
	include "include.php"; 
	
	//for login 	
	if(isset($_REQUEST['logInSubmit'])){
		$email=$_POST['loginEmail'];
		$passwd=$_POST["loginPasswd"];
			
		//Retrieve the hash and setPlace associated with the user - using the user’s email address.
		if ($stmt = $mysqli->prepare("select hash, place from sign_up where email = ?")) {
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($hash, $place);
			if ($stmt->fetch()) {
				//Authenticate
				if (hash_equals($hash, crypt($passwd, $hash))) {						
					$_SESSION["REMOTE_ADDR"] = $_SERVER["REMOTE_ADDR"]; //store clients IP address to help prevent session hijack
					if($place == 'I Need A Place'){
						header("Location: http://nyuroommates-com.stackstaging.com/needPlaceMat.php"); 
					}else{
						header("Location: http://nyuroommates-com.stackstaging.com/havePlaceMat.php"); 
					}
				}
			}
		}
	}
	
	//for sign-up
	if(isset($_REQUEST['signUpSubmit'])) {
		$name=$_POST['signUpName'];
		$email=$_POST['signUpEmail'];
		$place=$_POST['setPlace'];
		$passwd=$_POST["signUpPasswd"];
		$repasswd=$_POST["reEntSignUpPasswd"];

		//generate a random, unique salt
		$salt = uniqid(mt_rand(), true);
		
		//hash the password with the salt
		$hashed_password = crypt($repasswd, $salt);
		
		//insert all the values in the database
		if ($stmt = $mysqli->prepare("insert into sign_up (email, hash, salt, place, first_name) values (?,?,?,?,?)")) {
			$stmt->bind_param("sssss", $email, $hashed_password, $salt, $place, $name);
			$stmt->execute();
			$stmt->close();
		}
		
		if ($stmt = $mysqli->prepare("select pid from sign_up where hash = ? ")) {
			$stmt->bind_param("s", $hashed_password);
			$stmt->execute();
			$stmt->bind_result($pid);
			if ($stmt->fetch()) {
				$_SESSION["pid"] = $pid;
				$_SESSION["REMOTE_ADDR"] = $_SERVER["REMOTE_ADDR"]; //store clients IP address to help prevent session hijack
			}
		}
			
		if($_POST['setPlace']=='I Need A Place'){
			header("Location: http://nyuroommates-com.stackstaging.com/needPlace.php"); 
		}else{
			header("Location: http://nyuroommates-com.stackstaging.com/havePlace.php"); 
		}
	}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Signup</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index-style.css">
  </head>
  <body>
  
	<div id="logInCon">
		<header>
			<h3 id="logInHeader" class="col-sm-offset-2 col-sm-10">Log In<h3>
		</header>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" method="POST"> <!--Puts the label and the input field on the same line!-->
			<div class="form-group">
				<label for="loginEmail" class="col-sm-2 control-label">NYU Email Address</label>
				<div class="col-sm-10">
					<input type="email" class="form-control input-lg" name="loginEmail" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="loginPasswd" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control input-lg" name="loginPasswd" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-10">
	      			<button type="submit" name="logInSubmit" class="btn btn-info btn-lg">Submit!</button>
	    		</div>
			</div>
		</form>
	</div>

	<div id="signUpCon">
		<header>
			<h3 id="signUpHeader" class="col-sm-offset-2 col-sm-10">Sign Up<h3>
		</header>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" method="POST">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<label class="radio"><input type="radio" name="setPlace" id="needPlace" value="I Need A Place"> I Need A Place</label>
				<label class="radio"><input type="radio" name="setPlace" id="havePlace" value="I Have A Place"> I Have A Place</label>
			</div>
			<div class="form-group">
				<label for="signUpName" class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control input-lg" name="signUpName" id="signUpName" placeholder="First Name">
				</div>
			</div>
			<div class="form-group">
				<label for="signUpEmail" class="col-sm-2 control-label">NYU Email Address</label>
				<div class="col-sm-10">
					<input type="email" class="form-control input-lg" name="signUpEmail" id="signUpEmail" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="signUpPasswd" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input onkeyup='checkPassword();' id="signUpPasswdID" type="password" class="form-control input-lg" name="signUpPasswd" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label for="reEntSignUpPasswd" class="col-sm-2 control-label">Re-Enter Password</label>
				<div class="col-sm-10">
					<input onkeyup='checkPassword();' id="reEntSignUpPasswdID" type="password" class="form-control input-lg" name="reEntSignUpPasswd" placeholder="Re-Enter Password">
					<small id="passwordHelpBlock" class="form-text text-muted"></small>
				</div>
			</div>
			<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-10">
					<button id="whichProf" type="submit" name="signUpSubmit" class="btn btn-info btn-lg">Submit!</button>
	    		</div>
	    	</div>
	    </div>
	</form>

	<script src="js/index-script.js"></script>

  </body>
</html>