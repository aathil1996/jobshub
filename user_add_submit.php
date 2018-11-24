<?php

include('includes/dbconnection.php');
include('includes/session.php');

if(isset($_POST['submit'])){

    // Assign input data from form to variables
	$userID = $_POST['userID'];
	$name = $_POST['name'];
	$email = $_POST['email'];
  $password = sha1($_POST['password']);
	$password2 = sha1($_POST['password2']);
  $userType = $_POST['usertype'];
  $contact = $_POST['contact'];

    //Check if passwords match
    if ($password != $password2){
        $message = base64_encode(urlencode("Passwords do not match | Recheck Your Passwords"));
        header('Location:user_add.php?msg=' . $message);
        exit();
    }
    else {
        //Check if email already exists
        $selectmail= "SELECT * FROM users WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;
        $num = mysqli_num_rows($allmailquery);

        if($num > 0){
        $message = base64_encode(urlencode("Email already exists | Please Try Another One"));
        header('Location:user_add.php?msg=' . $message);
        exit();
			}

        //Insert to Database
        else {
            $registrationQuery = "INSERT INTO users (userID, name, email, password, usertype, contact)
						 VALUES ('$userID', '$name', '$email', '$password', '$usertype', '$contact')";

            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Registration Successful"));
				header('Location:user_add.php?msg=' . $message);
				exit();
            }

            else {
                $message = base64_encode(urlencode("Error...!"));
				header('Location:user_add.php?msg=' . $message);
				exit();
            }
        }

    }
}


mysqli_close($connection);



?>
