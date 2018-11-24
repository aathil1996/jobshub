<?php include('includes/dbconnection.php');
      include('includes/session.php');

	//Unauthorized Access Check
    checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != '2'){
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
                   <li><a href="provider_vacancies_view.php" class="bg-green" >View Vacancies</a></li>
                   <li><a href="provider_vacancies_add.php" class="bg-green" >Add Vacancies</a></li>
                   <li><a href="provider_vacancies_delete.php" class="bg-green" >Delete Vacancies</a></li>
             </ul>
        </div>
    </div>
<div class="row-100">
    <?php

        $userID = $_SESSION["userID"];
        $retrieve = "SELECT * FROM vacancies WHERE providerID='$userID'";

        //Selecting all data from Table
        $result = mysqli_query($connection,$retrieve);//Passing SQL
        //print_r($result);


        echo "<table class=\"user\">
            	<tr>
                <th>Vacanciy ID</th>
                <th>Provider Name</th>
                <th> Job Title </th>
                <th>Description </th>
                <th>Sector</th>
                <th>Closing Date</th>
                </tr>
            ";

      while($row = mysqli_fetch_assoc($result)){
          if($row['Sectortype']=='1'){
                  $type= "Government";
              }
              else{
                  $type="Private";
              }

            echo "

            <tr>
                <td>".$row['JobID']."</td>
                <td>".$row['Providername']."</td>
                <td>".$row['Jobtitle']."</td>
                <td>".$row['description']."</td>
                <td>".$type."</td>
                <td>".$row['ClosingDate']."</td>
            </tr>

            ";

        }
        echo "</table>";

    ?>




</body>

</html>
