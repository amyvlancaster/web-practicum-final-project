		<!-- Form Validaton -->
		<?php

			// define variables and set to empty values
			$error = "";
			$date = $petname = 
			$fname = $lname = $address1 = $address2 = $city = $state = $zipcode = $phone = $email = 
			$adults = $children = $childrenage = $agree = $rentown = $landlord = $homedescription = 
			$ownedpet = $history = $dead = $babies = $givenup = $current = $listpets = $petpreference = $numofpets = 
			$relive = $worktime = $alone = $kept = $spendtime = $sleep = $references = "";

			if (isset($_POST['submit'])) {
				$date = test_input($_POST["date"]);
				$petname = test_input($_POST["petname"]);

				$fname = test_input($_POST["fname"]);
				$lname = test_input($_POST["lname"]);
				$address1 = test_input($_POST["address1"]);
				$address2 = test_input($_POST["address2"]);
				$city = test_input($_POST["city"]);
				$state = test_input($_POST["state"]);
				$zipcode = test_input($_POST["zipcode"]);
				$phone = test_input($_POST["phone"]);
				$email = test_input($_POST["email"]);

				$adults = test_input($_POST["adults"]);
				$children = test_input($_POST["children"]);
				$childrenage = test_input($_POST["childrenage"]);
				$agree = test_input($_POST["agree"]);
				$rentown = test_input($_POST["rentown"]);
				$landlord = test_input($_POST["landlord"]);
				$homedescription = test_input($_POST["homedescription"]);

				$ownedpet = test_input($_POST["ownedpet"]);
				$history = test_input($_POST["history"]);
				$dead = test_input($_POST["dead"]);
				$babies = test_input($_POST["babies"]);
				$givenup = test_input($_POST["givenup"]);
				$current = test_input($_POST["current"]);
				$listpets = test_input($_POST["listpets"]);

				$petpreference = test_inout($_POST["petpreference"]);
				$numofpets = test_input($_POST["numofpets"]);

				$relieve = test_input($_POST["relieve"]);
				$worktime = test_input($_POST["worktime"]);
				$alone = test_input($_POST["alone"]);
				$kept = test_input($_POST["kept"]);
				$spendtime = test_input($_POST["spendtime"]);
				$sleep = test_input($_POST["sleep"]);

				$references = test_input($_POST["references"]);
				 
				}

				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}

				header("Location: submissionsuccess.html");
				?>