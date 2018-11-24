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
    <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;

    }

    .title {
      color: grey;
      font-size: 18px;
    }
    </style>
</head>

<body>

    <?php include('includes/header.php') ?>

    <hr>
    <div class="row-50">
        <h1 class="div-c">Welcome to JOBS HUB</h1>
    </div>
    <br/>
    <div class="row-50 bg-grey">
        <div class="row-100 navigation">
             <ul class="right-nav bg-green">
                      <li><a href="seeker_profile.php" class="bg-green" >My Profile</a></li>
                      <li><a href="seeker_profile_edit.php" class="bg-green" >Edit Profile</a></li>
                      <li><a href="vacancies.php" class="bg-green" >Find a Job</a></li>
                </ul>
        </div>
    </div>

    <div class="row-100"><h2 class="error-msg"><?php include_once('includes/message.php'); ?></h2></div>

    <?php



        $userID = $_SESSION["userID"];
        $allus = "SELECT * FROM users WHERE userID='$userID'";
        $userquery = mysqli_query($connection,$allus);
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

            echo "<div class=\"card\">
                  <p class=\"title\"> User ID: ".$row['userID']." </p>
                  <h1>User Name: ".$row['name']."</h1>
                  <p >E-mail: ".$row['email']."</p>
                  <p>Contact Number: ".$row['contact']."</p>
                  <p>User Type: ".$type." </p>

            </div>";

        }



    ?>


</body>
<?php include('includes/footer.php') ?>
</html>
