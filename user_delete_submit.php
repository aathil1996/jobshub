<?php

include('includes/dbconnection.php');
include('includes/session.php');

    $id=$_POST['userID'];

    $delQuery= "DELETE FROM users WHERE userID = '$id' ";

    $delResult = mysqli_query ($connection, $delQuery);
    header('Location:user_delete.php');


mysqli_close($connection);


?>
