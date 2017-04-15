<!doctype html>
	<html class="no-js" lang="en" dir="ltr">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="x-ua-compatible" content="ie=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Profile: I Have A Place</title>
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/havePlace-style.css">
		</head>
	<body>
		<header id="profHead">
			<h3>[FIRST_NAME]'S Profile For I Have A PLace</h3>
		</header>

		<div id="mainContainer">
			<form class="form-horizontal">
	
				<div class = "boundary" id="noBoundary">
					<header><h3>Location<h3></header>					
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Zip Code: </label>
						<div class="col-sm-10">
							<input type="text" pattern="[0-9]{5}" title="Five Digit Zip Code" class="form-control">
						</div>
					</div>
					<p class="center">---</p>
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
					<p class = "center">Of Poly</p>
					<div class="form-group">
						<label for="subLine" class="col-sm-2 control-label">Via Subway Line: </label>
						<div class="col-sm-10">
							<select class="form-control" name="subLine">
							    <option>A, C, E</option>
							    <option>B, D, F, M</option>
							    <option>G</option>
							    <option>L</option>
							    <option>J, Z</option>
							    <option>N, Q, R, W</option>
							    <option>1, 2, 3</option>
							    <option>4, 5, 6</option>
							    <option>7</option>
							    <option>S</option>
							</select> 
						</div>
					</div>
					<p class="center">---</p>
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
					<p class = "center" id="moreCen">Of Washington Sqaure Campus</p>
					<div class="form-group">
						<label for="subLine" class="col-sm-2 control-label">Via Subway Line: </label>
						<div class="col-sm-10">
							<select class="form-control" name="subLine">
							    <option>A, C, E</option>
							    <option>B, D, F, M</option>
							    <option>G</option>
							    <option>L</option>
							    <option>J, Z</option>
							    <option>N, Q, R, W</option>
							    <option>1, 2, 3</option>
							    <option>4, 5, 6</option>
							    <option>7</option>
							    <option>S</option>
							</select> 
						</div>
					</div>	
				</div>

				<div class = "boundary">
					<header><h3>Household Description<h3></header>				
					<div class="form-group">
						<label for="totMem" class="col-sm-2 control-label">Total Members: </label>
						<div class="col-sm-10">
							<select class="form-control" name="totMem">
							    <option>Just Me</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
							    <option>5+</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="totBed" class="col-sm-2 control-label">Total Bedroom: </label>
						<div class="col-sm-10">
							<select class="form-control" name="totBed">
							    <option>Studio</option>
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
							    <option>5+</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="totBath" class="col-sm-2 control-label">Total Bathroom: </label>
						<div class="col-sm-10">
							<select class="form-control" name="totBath">
							    <option>1</option>
							    <option>1.5</option>
							    <option>2</option>
							    <option>2.5</option>
							    <option>3+</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label for="amen" class="col-sm-2 control-label" id="textBold">Amenities: </label>
							<div class="col-sm-10">
							    <label> <input type="checkbox" name="amen"> Air Conditioning </label>
							    <label> <input type="checkbox" name="amen"> Dishwasher </label>
							    <label> <input type="checkbox" name="amen"> Laundry Facility </label>
							    <label> <input type="checkbox" name="amen"> Elevator </label>
							    <label> <input type="checkbox" name="amen"> High Speed Internet </label>
							    <label> <input type="checkbox" name="amen"> Storage </label>
							    <label> <input type="checkbox" name="amen"> Washer/Dryer </label>
							</div>
						</div>
					</div>		
					<p id = "pNoUnder">Comments/Caveats About The Amenties Listed Above:</p>
					<div class="form-group">
						<textarea class="form-control" rows="3" placeholder="Write Something..."></textarea>
					</div>
				</div>

				<div class = "boundary">
					<header><h3>Space Details<h3></header>				
					<div class="form-group">
						<label for="monFee" class="col-sm-2 control-label">Monthly Fee: </label>
						<div class="col-sm-10">
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="number" class="form-control" name="monFee">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="deposit" class="col-sm-2 control-label">Deposit: </label>
						<div class="col-sm-10">
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="number" class="form-control" name="deposit">
							</div>
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
						<div class="checkbox">
							<label for="util" class="col-sm-2 control-label" id="textBold">Utilities: </label>
							<div class="col-sm-10">
							    <label> <input type="checkbox" name="util"> Electricity </label>
							    <label> <input type="checkbox" name="util"> Gas </label>
							    <label> <input type="checkbox" name="util"> Water </label>
							    <label> <input type="checkbox" name="util"> Trash Pickup </label> 
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Bedroom Occupancy: </label>
						<div class="col-sm-10">
							<select class="form-control" name="">
							    <option>Private Bedroom</option>
							    <option>Shared Bedroom</option>
							</select> 
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Bathroom Occupancy: </label>
						<div class="col-sm-10">
							<select class="form-control" name="">
							    <option>Private Bathroom</option>
							    <option>Shared Bathroom</option>
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
							    <label> <input type="checkbox" name="Rclean"> Clean </label>
							    <label> <input type="checkbox" name="Rclean"> Avg </label>
							    <label> <input type="checkbox" name="Rclean"> Messy </label> 
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
						<label for="eth" class="col-sm-2 control-label">Ethnicity: </label>
						<div class="col-sm-10">
							<select class="form-control" name="eth">
							    <option>Indian</option>
							    <option>Oriental</option>
							    <option>Caucasian</option>
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
							    <label> <input type="checkbox" name="Aclean"> Clean </label>
							    <label> <input type="checkbox" name="Aclean"> Avg </label>
							    <label> <input type="checkbox" name="Aclean"> Messy </label> 
							</div>
						</div>
					</div>
				</div>
				
				<div class = "boundary">
					<header><h3>Comments<h3></header>
					<p id="pNoUnder">It is strongly recommended to personalize your profile by describing yourself (such as your habits, hobbies or personality) and your place, as well as what you are looking for in a roommate</p>
					<div class="form-group">
						<textarea class="form-control" rows="5" placeholder="Write Something..."></textarea>
					</div>
				</div>

				<div class="form-group">		    		
		      		<button type="submit" class="btn btn-info">Submit!</button>
				</div>

			</form>
		</div>
	</body>
</html>
