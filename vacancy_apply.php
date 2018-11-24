<?php
    include('includes/dbconnection.php');
    include('includes/session.php');
?>

<?php
	//Unauthorized Access Check
    checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != '1'){
       $message = base64_encode(urlencode("Registered Seekers only can See, Please join with Us.!"));
       header('Location:login.php?msg=' . $message);
       exit();
       }
?>

<!DOCTYPE html>
<html>

<head>
    <title>More Details</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>

    <div class="row-100">
        <h1>More Details</h1>
    </div>



<?php

    $JobID = $_POST['JobID'];


            $vacanyQuery= "SELECT * FROM vacancies WHERE JobID = '$JobID' ";
            $result = mysqli_query ($connection, $vacanyQuery);

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
                    <th>Apply</th>
                      </tr>
                  ";

                while($row = mysqli_fetch_assoc($result)){

                  if($row['Sectortype']=='1'){
                       $type= "Government";
                   }
                   else{
                       $type="Private";
                   }

                    echo "<tr>
                           <td>".$row['JobID']."</td>
                           <td>".$row['Providername']."</td>
                           <td>".$row['Jobtitle']."</td>
                           <td>".$row['description']."</td>
                           <td>".$type."</td>
                           <td>".$row['ClosingDate']."</td>
                           <td>".$row['Contact']."</td>
                           <td>".$row['email']."</td>
                           <td>".$row['website']."</td>
                           <td>
                                   <form action =\"vacancy_apply_submit.php\" name=\"apply\" method=\"post\" >
                                       <input type=\"hidden\" value=" .$row['JobID']. " name=\"JobID\">
                                       <input class=\"form-button\" type=\"submit\" name=\"submit\" value=\"Apply\">
                                   </form>

                           </td>
                       </tr>
                       ";

                     }

                echo "</table>";

?>

<br/> <br/> <br/>

</body>
<?php include('includes/footer.php') ?>
</html>
