<?php include('includes/dbconnection.php') ?>
<?php include('includes/session.php') ?>

<?php
    error_reporting(E_ALL & ~E_NOTICE);
	//Unauthorized Access Check
    checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != '1'){
       $message = base64_encode(urlencode("You don't have Authentiation"));
       header('Location:login.php?msg=' . $message);
       exit();
       }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Job Seekers</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>

    <hr>
    <div class="row-50">
        <h1 class="div-c">Welcome to Jobs Hub</h1>
    </div>
    <div class="row-50 bg-grey">
        <div class="row-100 navigation">
            <ul class="right-nav bg-green">
                <li><a href="seeker_profile.php" class="bg-green" >My Profile</a></li>
                <li><a href="seeker_profile_edit.php" class="bg-green" >Edit Profile</a></li>
                <li><a href="vacancies.php" class="bg-green" >Find a Job</a></li>
            </ul>
        </div>
    </div>

    <div class="row-100">
      <h2 class="error-msg"><?php include_once('includes/message.php'); ?></h2>
    </div>

    <?php

            $userID = $_SESSION["userID"];
            $selectusers = "SELECT * FROM users WHERE userID='$userID'";

            $userquery = mysqli_query($connection,$selectusers);

            echo "<div class=\"row-100\">";

                while($row = mysqli_fetch_assoc($userquery)){
                  if($row['usertype']=='0'){
                          $type= "Admin";
                      }
                      elseif($row['usertype']=='1'){
                          $type="Seeker";
                      }
                      else{
                          $type="Provider";
                      }
                    echo "
                    <div class=\"row-100\">
                        <div class=\"login-box\">
                            <form action=\"seeker_profile_edit_submit.php\" method=\"post\">
                                <p>Name</p>
                                <input type=\"text\" name=\"EditName\" placeholder=\"Edit name\" value=\"{$row['name']}\" required>

                                <p>Email address</p>
                                <input type=\"email\" name=\"EditEmail\" placeholder=\"email\" value=\"{$row['email']}\" required>

                                <p>Password</p>
                                <input type=\"password\" name=\"EditPassword\" placeholder=\"Enter Password\" required>

                                <p>Confirm Password</p>
                                <input type=\"password\" name=\"EditPassword2\" placeholder=\"Re-Enter Password\" required>

                                <p>Contact number</p>
                                <input type=\"text\" name=\"EditContact\" value=\"{$row['contact']}\">
                                <p></p>
                                <input type=\"hidden\" value=" .$row['userID']. " name=\"EditID\">
                                <input type=\"submit\" name=\"EditSubmit\" value=\"EDIT\" required >
                            </form>
                        </div>
                    </div>"

                        ;




}
    ?>


</body>

</html>
