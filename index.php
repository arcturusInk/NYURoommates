<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index-style.css">
  </head>
  <body>
  
	<div id="logInCon">
		<header>
			<h3 id="logInHeader" class="col-sm-offset-2 col-sm-10">Log In<h3>
		</header>
		<form class="form-horizontal">
			<div class="form-group">
				<label for="loginEmail" class="col-sm-2 control-label">NYU Email Address</label>
				<div class="col-sm-10">
					<input type="email" class="form-control input-lg" id="loginEmail" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="loginPasswd" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control input-lg" id="loginPasswd" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-10">
	      			<button type="submit" class="btn btn-info btn-lg">Submit!</button>
	    		</div>
			</div>
		</form>
	</div>

	<div id="signUpCon">
		<header>
			<h3 id="signUpHeader" class="col-sm-offset-2 col-sm-10">Sign Up<h3>
		</header>
		<label class="col-sm-offset-2 col-sm-10">
			<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> I Need A Place 
		</label>
		<label class="col-sm-offset-2 col-sm-10">
			<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> I Have A Place
		</label>
		<form class="form-horizontal">
			<div class="form-group">
				<label for="signUpName" class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control input-lg" id="signUpName" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="signUpEmail" class="col-sm-2 control-label">NYU Email Address</label>
				<div class="col-sm-10">
					<input type="email" class="form-control input-lg" id="signUpEmail" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="signUpPasswd" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control input-lg" id="signUpPasswd" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label for="reEntSignUpPasswd" class="col-sm-2 control-label">Re-Enter Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control input-lg" id="reEntSignUpPasswd" placeholder="Re-Enter Password">
				</div>
			</div>
			<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-10">
	      		<button type="submit" class="btn btn-info btn-lg">Submit!</button>
	    	</div>
	    </div>
	</form>
  </body>
</html>