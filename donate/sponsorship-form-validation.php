		<!-- Form Validaton -->
		<?php

			// define variables and set to empty values
			$error = "";
			$date = $petname = 
			$fname = $email = $adr = $city = $state = $zip "";
			$animalname = $honorof = "";
			$cname = $ccnum = $expmonth = $expyear = $cvv = "";

			if (isset($_POST['submit'])) {
				$fname = test_input($_POST["fname"]);
				$email = test_input($_POST["email"]);
				$adr = test_input($_POST["adr"]);
				$city = test_input($_POST["city"]);
				$state = test_input($_POST["state"]);
				$zip = test_input($_POST["zip"]);

				$animalname = test_input($_POST["animalname"]);
				$honorof = test_input($_POST["honorof"]);

				$cname = test_input($_POST["cname"]);
				$ccnum = test_input($_POST["ccnum"]);
				$expmonth = test_input($_POST["expmonth"]);
				$expyear = test_input($_POST["expyear"]);
				$cvv = test_input($_POST["cvv"]);
				 
				}

				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}

				header("Location: submissionsuccess.html");
				?>