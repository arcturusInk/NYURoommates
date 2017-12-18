<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
	      			<button type="submit" class="btn btn-info btn-lg">Submit!</button>
	    		</div>
			</div>
		</form>
		<header><h4 class="col-sm-offset-2 col-sm-10">Don't Have An Account? <a href="signUp.php">Sign Up!</a><h4></header>
	</div>

 </body>
</html>