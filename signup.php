<!-- <?php
  // after user successfully signs up, save this data for future log ins
	require_once './addToPage/database.php';
	

	// variables for signin form
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
  	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	$ok = true;


	require './addToPage/header.php';
	if(empty($first_name)){
		$ok = false;
		$displaymsg ='First name cannot be empty';
	}
	if(empty($last_name)){
		$ok = false;
		$displaymsg ='Last name cannot be empty';
	}
	if(empty($username)){
		$ok = false;
		$displaymsg ='Username cannot be empty';
	}
  	if(empty($email)){
		$ok = false;
		$displaymsg ='Email cannot be empty';
	}
	if((empty($password)) || ($password != $confirm)){
		$ok = false;
		$displaymsg ='Password invalid';
	}


	// check if email is already being used
	$checkEmail = "SELECT email FROM useraccount WHERE email = '$email'"; //search all accounts in table to see if that email already exists
	$result = $conn->query($checkEmail);
	$count = $result -> rowCount();

	if($count == 1){ //if the number of accounts using that email equals 1 (already exists) do not continue
		$ok = false;
		$displaymsg = 'Email address is already being used, please use a different Email.';
	}
	

	if($ok){

		// hash user password
		$password = hash('sha512', $password);

		// set up sql command
		$sql = "INSERT INTO useraccount (first_name, last_name, username, email, password) VALUES ('$first_name','$last_name','$username','$email','$password')";

		//execute sql command stated above then close connection to database
		$conn->exec($sql);
		$conn = null;

		// display message to inform account was created
		$displaymsg = "Account successfully created!";
	}
	?> -->

	<!-- add button to allow user to return to signin / login page -->
    <main class='center'> 
        <section class='setup'>
            <div>
				<h3><?php echo $displaymsg; ?></h3>
                <a href="index.php">Sign In</a>
            </div>
        </section>
    </main>


<?php require './addToPage/footer.php'; ?>