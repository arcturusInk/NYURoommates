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
		<form class="form-horizontal"> <!--Puts the label and the input field on the same line!-->
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
		<form class="form-horizontal">
			<label class="col-sm-offset-2 col-sm-10"><input type="radio" name="setPlace" id="needPlace"> I Need A Place </label>
			<label class="col-sm-offset-2 col-sm-10" id="dist"><input type="radio" name="setPlace" id="havePlace"> I Have A Place </label>
			<div class="form-group">
				<label for="signUpName" class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control input-lg" name="signUpName" placeholder="First Name">
				</div>
			</div>
			<div class="form-group">
				<label for="signUpEmail" class="col-sm-2 control-label">NYU Email Address</label>
				<div class="col-sm-10">
					<input type="email" class="form-control input-lg" name="signUpEmail" placeholder="Email">
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
	      		<a onclick="directLink()" id="whichProf" type="submit" class="btn btn-info btn-lg">Submit!</a>
	    		</div>
	    	</div>
	    </div>
	</form>

	<script src="js/index-script.js"></script>

  </body>
</html>