<?php 
	include "include.php"; 

	if(isset($_REQUEST['needPlaceSubmit'])){
		//location preferences
		$timLim=$_POST['timLim'];
		$loc=$_POST["loc"];
		//Space Preferences
		$rent=$_POST['rent'];
		$term=$_POST["term"];
		$bedOcu=$_POST['bedOcu'];
		//Roommate Preferences
		$Rdegree=$_POST['Rdegree'];
		$Rgender=$_POST['Rgender'];
		$RsleHab=$_POST["RsleHab"];
		$Rsmoke=$_POST['Rsmoke'];
		$Rclean=$_POST['Rclean'];
		//About Me
		$Adegree=$_POST['Adegree'];
		$Agender=$_POST["Agender"];
		$AsleHab=$_POST['AsleHab'];
		$Asmoke=$_POST['Asmoke'];
		$Aclean=$_POST['Aclean'];
		$comment=$_POST["comments"];
		//htmlspecialchars: only needed when outputing user-entered data
		
		
		//insert the values for location preferences
		if ($stmt = $mysqli->prepare("insert into loc_pref (pid, within, of) values (?,?,?)")) {
			$stmt->bind_param("iss", $_SESSION["pid"], $timLim, $loc);
			$stmt->execute();
			$stmt->close();
		}	
		
		//insert the values for space preferences
		if ($stmt = $mysqli->prepare("insert into space_pref (pid, max_rent, lease_term, bedrm_ocupcy) values (?,?,?,?)")) {
			$stmt->bind_param("isss", $_SESSION["pid"], $rent, $term, $bedOcu);
			$stmt->execute();
			$stmt->close();
		}
		
		//insert the values for roommate preferences
		if ($stmt = $mysqli->prepare("insert into roommate_pref (pid, degree, gender, sleeping_habits, smoking, cleanliness) values (?,?,?,?,?,?)")) {
			$stmt->bind_param("isssss", $_SESSION["pid"], $Rdegree, $Rgender, $RsleHab, $Rsmoke, $Rclean);
			$stmt->execute();
			$stmt->close();
		}
		
		//insert the values that are about the user
		if ($stmt = $mysqli->prepare("insert into person (pid, degree, gender, sleeping_habits, smoking, cleanliness, comments) values (?,?,?,?,?,?,?)")) {
			$stmt->bind_param("issssss", $_SESSION["pid"], $Adegree, $Agender, $AsleHab, $Asmoke, $Aclean, $comment);
			$stmt->execute();
			$stmt->close();
		}
		
		header("Location: http://nyuroommates-com.stackstaging.com/needPlaceMat.php"); 
	}
?>

<!doctype html>
	<html class="no-js" lang="en" dir="ltr">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="x-ua-compatible" content="ie=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Profile: I Need A Place</title>
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/needPlace-style.css">
		</head>
	<body>

	<?php 
	if ($stmt = $mysqli->prepare("select first_name from sign_up where pid = ?")) {
			$stmt->bind_param("i", $_SESSION["pid"]);
			$stmt->execute();
			$stmt->bind_result($first_name);
			if ($stmt->fetch()) { ?>
				<header id="profHead">
					<h3><?php echo $first_name; ?>'s Profile: I Need A PLace</h3>
				</header>
	<?php
			}
		}
	?>
	
		<div id="mainContainer">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" method="POST">

				<div class = "boundary" id="noBoundary">
					<header> <h3>Location Preferences<h3> </header>
					<div class="form-group">
						<label for="timLim" class="col-sm-2 control-label">Within: </label>
						<div class="col-sm-10">
							<select class="form-control" name="timLim">
							    <option>5 Mins</option>
							    <option>10 Mins</option>
							    <option>15 Mins</option>
							    <option>20 Mins</option>
							    <option>30 Mins</option>
							    <option>1 Hour</option>
							    <option>1 Hour 30 Mins</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="loc" class="col-sm-2 control-label">Of: </label>
						<div class="col-sm-10">
							<select class="form-control" name="loc">
							    <option>Poly</option>
							    <option>Washington Square Campus</option>
							</select> 
						</div>
					</div>	
				</div>

				<div class = "boundary">
					<header><h3>Space Preferences<h3></header>				
					<div class="form-group">
						<label for="rent" class="col-sm-2 control-label">Maximum Rent (You Are Willing To Pay): </label>
						<div class="col-sm-10">
							<select class="form-control" name="rent">
							    <option>$2000+/Month</option>
							    <option>$1500/Month</option>
							    <option>$1000/Month</option>
							    <option>$900/Month</option>
							    <option>$800/Month</option>
							    <option>$700/Month</option>
							    <option>$600/Month</option>
							    <option>$500/Month</option>
							    <option>$400/Month</option>
							    <option>$300/Month</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="term" class="col-sm-2 control-label">Term For Leasing: </label>
						<div class="col-sm-10">
							<select class="form-control" name="term">
							    <option>12 Month Or Less</option>
							    <option>3 Month Or Less</option>
							    <option>6 Month Or Less</option>
							    <option>9 Month Or Less</option>
							    <option>Month To Month</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="bedOcu" class="col-sm-2 control-label">Bedroom Occupancy: </label>
						<div class="col-sm-10">
							<select class="form-control" name="bedOcu">
							    <option>I Will Share A Bedroom</option>
							    <option>I'd Like My Own Bedroom</option>
							</select> 
						</div>
					</div>
				</div>

				<div class = "boundary">
					<header><h3>Roommate Preferences<h3></header>				
					<div class="form-group">
						<label for="Rdegree" class="col-sm-2 control-label">Degree: </label>
						<div class="col-sm-10">
							<select class="form-control" name="Rdegree">
							    <option>Undergrad</option>
							    <option>Grad</option>
							    <option>No Preference</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="Rgender" class="col-sm-2 control-label">Gender: </label>
						<div class="col-sm-10">
							<select class="form-control" name="Rgender">
							    <option>Female</option>
							    <option>Male</option>
							    <option>No Preference</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="RsleHab" class="col-sm-2 control-label">Sleeping Habits: </label>
						<div class="col-sm-10">
							<select class="form-control" name="RsleHab">
							    <option>Sleeps Late (After 12)</option>
							    <option>Sleeps Early (Before 12)</option>
							    <option>No Preference</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="Rsmoke" class="col-sm-2 control-label">Smoking: </label>
						<div class="col-sm-10">
							<select class="form-control" name="Rsmoke">
							    <option>Likes To Smoke</option>
							    <option>Does Not Like To Smoke</option>
							    <option>No Preference</option>
							</select> 
						</div>
					</div>
					<p>Select What's Acceptable</p>
					<div class="form-group">
						<div class="checkbox">
							<label for="Rclean" class="col-sm-2 control-label" id="textBold">Cleanliness: </label>
							<div class="col-sm-10">
							    <label class="radio-inline"> <input type="radio" name="Rclean" value="Clean"> Clean </label>
							    <label class="radio-inline"> <input type="radio" name="Rclean" value="Avg"> Avg </label>
							    <label class="radio-inline"> <input type="radio" name="Rclean" value="Messy"> Messy </label> 
							</div>
						</div>
					</div>
				</div>

				<div class = "boundary">
					<header><h3>About Me<h3></header>
					<div class="form-group">
						<label for="Adegree" class="col-sm-2 control-label">Degree: </label>
						<div class="col-sm-10">
							<select class="form-control" name="Adegree">
							    <option>Undergrad</option>
							    <option>Grad</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="Agender" class="col-sm-2 control-label">Gender: </label>
						<div class="col-sm-10">
							<select class="form-control" name="Agender">
							    <option>Female</option>
							    <option>Male</option>
							    <option>Other</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="AsleHab" class="col-sm-2 control-label">Sleeping Habits: </label>
						<div class="col-sm-10">
							<select class="form-control" name="AsleHab">
							    <option>Sleep Late (After 12)</option>
							    <option>Sleep Early (Before 12)</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="Asmoke" class="col-sm-2 control-label">Smoking: </label>
						<div class="col-sm-10">
							<select class="form-control" name="Asmoke">
							    <option>Smoke</option>
							    <option>Do Not Smoke</option>
							</select> 
						</div>
					</div>
					<p>Select What Describes You</p>
					<div class="form-group">
						<div class="checkbox">
							<label for="Aclean" class="col-sm-2 control-label" id="textBold">Cleanliness: </label>
							<div class="col-sm-10">
							    <label class="radio-inline"> <input type="radio" name="Aclean" value="Clean"> Clean </label>
							    <label class="radio-inline"> <input type="radio" name="Aclean" value="Avg"> Avg </label>
							    <label class="radio-inline"> <input type="radio" name="Aclean" value="Messy"> Messy </label> 
							</div>
						</div>
					</div>
				</div>

				<div class = "boundary">
					<header><h3>Comments<h3></header>
					<p id="pNoUnder">It is strongly recommended to personalize your profile by describing yourself (such as your habits, hobbies or personality) and what you are looking for in a roommate/place</p>
					<div class="form-group">
						<textarea class="form-control" rows="5" name="comments" placeholder="Write Something..."></textarea>
					</div>
				</div>

				<div class="form-group">		    		
		      		<button type="submit" name="needPlaceSubmit" class="btn btn-info">Submit!</button>
				</div>

			</form>
		</div>
	</body>
</html>
