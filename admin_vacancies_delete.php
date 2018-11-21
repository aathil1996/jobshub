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
    <title>Delete Vacancies</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>

    <hr>
    <div class="row-25 bg-grey">
        <h1 class="div-c">Delete Vacancies</h1>
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


    <div class="row25">
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
              <th>Contact Number</th>
              <th>e-Mail</th>
              <th>Website</th>
              <th>Delete</th>
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
                <td>".$row['Contact']."</td>
                <td>".$row['email']."</td>
                <td>".$row['website']."</td>
                <td>
                        <form action =\"admin_vacancies_delete_submit.php\" name=\"del_submit\" method=\"post\" >
                            <input type=\"hidden\" value=" .$row['JobID']. " name=\"JobID\">
                            <input class=\"form-button\" type=\"submit\" name=\"submit\" value=\"Delete\">
                        </form>
                </td>
            </tr>
            ";
        }

        echo "</table>";


?>


</body>


</html>
