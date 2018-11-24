<?php include('includes/dbconnection.php') ?>
<?php include('includes/session.php') ?>

<?php
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


    <div class="row-100">
        <h1 class="div-c">Job Seeker Dashboard</h1>
    </div>

    <div class="row-100">
        <a href="seeker_profile.php">
            <div class="dashboard-button">
                    Profile
            </div>
        </a>
    </div>

    <div class="row-100">
        <a href="vacancies.php">
            <div class="dashboard-button">
                    Find a Job
            </div>
        </a>
    </div>


</body>

</html>
