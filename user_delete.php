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
    <title>Delete Users</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>
        <hr>
        <div class="row-50">
            <h1 class="div-c">Delete Users</h1>
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

    <div class="row-25">
    </div>

    <div class="row25">
    </div>
    <?php

        $retrieve = "SELECT * FROM users";

        $result = mysqli_query($connection,$retrieve);

        echo "<table class=\"user\">
            	<tr>
              <th>User ID</th>
              <th>User Name</th>
              <th>Email </th>
              <th>User Type </th>
              <th>Contact Details</th>
              <th>Delete</th>
              </tr>
            ";
              echo "<div class=\"row-100\">";
        while($row = mysqli_fetch_assoc($result)){
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
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$type."</td>
                <td>".$row['contact']."</td>
                <td>
                      <form action =\"user_delete_submit.php\" name=\"del_submit\" method=\"post\" >
                          <input type=\"hidden\" value=" .$row['userID']. " name=\"userID\">
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
