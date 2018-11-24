<?php

include('includes/dbconnection.php');
include('includes/session.php');

    $id=$_POST['JobID'];

    $delQuery= "DELETE FROM vacancies WHERE JobID = '$id' ";

    $delResult = mysqli_query ($connection, $delQuery);
    header('Location:provider_vacancies_view.php');


mysqli_close($connection);


?>
