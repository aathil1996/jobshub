<?php include('includes/dbconnection.php') ?>
<?php include('includes/session.php') ?>

<?php
	//Unauthorized Access Check
    checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != '0'){
       $message = base64_encode(urlencode("You don't have Authentication"));
       header('Location:login.php?msg=' . $message);
       exit();
       }

?>

<!DOCTYPE html>
<html>

<head>
    <title>View Vacancies </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>

    <hr>
    <div class="row-25 bg-grey">
        <h1 class="div-c">View Vacancies</h1>
    </div>
    <div class="row-75 bg-grey">
        <div class="row-100 navigation">
            <ul class="right-nav bg-green">
                   <li><a href="jobs_list.php" class="bg-green" >View Vacancies</a></li>
                   <li><a href="admin_vacancies_add.php" class="bg-green" >Add Vacancies</a></li>
                   <li><a href="admin_vacancies_delete.php" class="bg-green" >Delete Vacancies</a></li>
             </ul>
        </div>
    </div>

    <?php
        $retrieve = "SELECT * FROM vacancies";

        $result = mysqli_query($connection,$retrieve);


        echo "<table class=\"user\">
            	<tr>
                <th>Vacancies ID</th>
                <th>Provider Name</th>
                <th> Job Title </th>
                <th>Description </th>
                <th>Sector</th>
                <th>Closing Date</th>
                </tr>
            ";

        while($row = mysqli_fetch_assoc($result)){

            echo "

            <tr>
                <td>".$row['JobID']."</td>
                <td>".$row['Providername']."</td>
                <td>".$row['Jobtitle']."</td>
                <td>".$row['description']."</td>
                <td>".$row['Sectortype']."</td>
                <td>".$row['ClosingDate']."</td>
            </tr>

            ";

        }
        echo "</table>";

    ?>




</body>

</html>
