<?php include('includes/dbconnection.php') ?>
<?php include('includes/session.php') ?>

<?php
	//Unauthorized Access Check
    checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != '0'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:login.php?msg=' . $message);
       exit();
       }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>

    <div class="row-100">
        <h1 class="div-c">Admin Dashboard</h1>
    </div>

    <div class="row-100">
        <a href="User_list.php">
            <div class="dashboard-button">
                    Users
            </div>
        </a>
    </div>

    <div class="row-100">
        <a href="jobs_list.php">
            <div class="dashboard-button">
                    Vacancies
            </div>
        </a>
    </div>
    <?php include('includes/footer.php') ?>

</body>

</html>
