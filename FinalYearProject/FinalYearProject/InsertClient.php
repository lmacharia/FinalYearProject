<?php require_once("connection_to_db.php"); ?>

		<?php
		  $companyName = $_POST['cmpyName'];
          $serviceDescription = trim($_POST['serviceDes']);
		  $fname = trim($_POST['fname']);
		  $sname = trim($_POST['lname']);
          $address = trim($_POST['address']);
          $postcode = trim($_POST['postcode']);
          $contactNo = trim($_POST['cntNumber'])
		  $email = trim($_POST['loginEmail']);
		  $password = trim($_POST['loinPassword']);
		  $repeated_password = trim($_POST['repeat_LoginPassword']);


		  //if any of the mandatory registration details is not filled in
		  if($fname == "" || $surname == "" || $address == "" || $postcode == "" || $contactNo == "" || $email == "" || $password == "" || $repeated_password == "")
		  {
		        echo '<h1>Unsuccessful Registration</h1><h2>You have not entered all the required details.<br />Please go back and try again.</h2>';

				//Use either PHP code or javascript history() function to return to the previous page
				if ($_SERVER['HTTP_REFERER']) { 
					echo '<div class="buy_now_button"><a href="' . htmlspecialchars($_SERVER['HTTP_REFERER']) . '">Back</a></div><div class="cleaner">&nbsp;</div>';
                } else { 
				   echo '<div class="buy_now_button"><a href="javascript:history.go(-1)">Back</a></div><div class="cleaner">&nbsp;</div>';
                } 
		}
		  		  
		  //if all required text boxes are filled in
		  else
		  {
		    //check if the same email address already exists in the DB
			$query_email = "SELECT * FROM Users WHERE email = '$email'";
				
	        $query_result_email = mysql_query($query_email)
	          or die(mysql_error());
	
	        $num_rows_email = mysql_num_rows($query_result_email);
			if ($num_rows_email == 0)
			{
			
			//if password and repeated password are the same
			if($password == $repeated_password)
			{
				  //Create query to insert into User table
				  $query = "INSERT INTO User (cmpyName, email, password, title, fname, lname, accountType, registrationDate, status) VALUES ('$compayName', $email', '$password', '$title', '$fname', '$surname', 'User', '17.06.2014', 'New User')";

				  //Execute query
				  $result = mysql_query($query);

				  //Check if everything finished successfully
				  if($result){
					   echo "<h1>Successful Registration!</h1><h2>Thank you for choosing Crozier V Ltd. You will receieve an email shortly with further information on what happens next.</h2>";    
				  }
				  else{	
					echo '<h1>Unsuccessful Registration: '.mysql_error() . '</h1><h2><br />Please go back and try again.</h2>';
					echo '<div class="buy_now_button"><a href="javascript:history.go(-1)">Back</a></div><div class="cleaner">&nbsp;</div>';
					} 
			 }
			 //if password and repeated password are not the same
			 else
			 {
		        echo '<h1>Unsuccessful Registration</h1><h2>Your password is not the same as the repeated password.<br />Please go back and try again.</h2>';
				echo '<div class="buy_now_button"><a href="javascript:history.go(-1)">Back</a></div><div class="cleaner">&nbsp;</div>';
			 }
			 }
			 // email address already exist in the DB!
			 else
			 {
			    echo '<h1>Unsuccessful Registration</h1><h2>A user with the same email address has already been registered!<br />Please go back and try again.</h2>';
				echo '<div class="buy_now_button"><a href="javascript:history.go(-1)">Back</a></div><div class="cleaner">&nbsp;</div>'; 
			 }
		 }
		   
		?>