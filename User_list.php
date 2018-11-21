<?php include('includes/dbconnection.php') ?>
<?php include('includes/session.php') ?>

<?php
    error_reporting(E_ALL & ~E_NOTICE);
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
    <title>User Lists</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>

    <hr>
    <div class="row-50">
        <h1 class="div-c">View Users</h1>
    </div>
    <div class="row-50 bg-grey">
        <div class="row-100 navigation">
             <ul class="left-nav bg-green">
                      <li><a href="user_list.php" class="bg-green" >View Users</a></li>
                      <li><a href="user_add.php" class="bg-green" >Add Users</a></li>
                      <li><a href="user_edit.php" class="bg-green" >Edit Users</a></li>
                      <li><a href="user_delete.php" class="bg-green" >Delete Users</a></li>
                </ul>
        </div>
    </div>

    <?php

        echo "<table border=1 class=\"user\">
                <tr>
                    <th>User id</th>
                    <th>User type</th>
                    <th>User name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                </tr>";
        $allus = "SELECT * FROM users";
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
            echo "<tr>
                <td>".$row['userID']."</td>
                <td>".$type."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['contact']."</td>
                </tr>";

        }

         echo "</table>";

    ?>



</body>
<?php include('includes/footer.php') ?>
</html>
