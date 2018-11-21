<?php

include('includes/dbconnection.php');

if(isset($_POST['submit'])){

    // Assign input data from form to variables
	$name = $_POST['name'];
	$email = $_POST['email'];
    $password = sha1($_POST['password']);
	$password2 = sha1($_POST['password2']);
    $userType = $_POST['userType'];
    $contact = $_POST['contact'];

        //Check if email already exists
        $selectmail= "SELECT * FROM users WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;
        $num = mysqli_num_rows($allmailquery);

        if($num > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:signup.php?msg=' . $message);
        exit();
        }

        //Insert to Database
        else {
            $registrationQuery = "INSERT INTO users (name, email, password, usertype, contact)
						 	VALUES ('$name', '$email', '$password', '$userType', '$contact')";

            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Registration Successful"));

				header('Location:login.php?msg=' . $message);
				exit();
            }

            else {
                $message = base64_encode(urlencode("Database Error...! Please contact the admin"));
				header('Location:provide_job_add.php?msg=' . $message);
				exit();
            }
        }

}


mysqli_close($connection);



?>