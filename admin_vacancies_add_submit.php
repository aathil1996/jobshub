<?php

include('includes/dbconnection.php');
include('includes/session.php');

//Uploading to Database
if (isset($_POST['submit'])){


    $jobID = $_POST['JobID'];
    $providername = $_POST['Providername'];
    $jobtitle = $_POST['Jobtitle'];
    $description = $_POST['description'];
    $sector = $_POST['Sectortype'];
    $closing = $_POST['ClosingDate'];
    $Contact = $_POST['Contact'];
    $email = $_POST['email'];
    $website = $_POST['website'];

    $insertVacancy = "INSERT INTO vacancies ( JobID, Providername, Jobtitle, description, Sectortype, ClosingDate, Contact,
      email,website )
     VALUES ('$jobID','$providername', '$jobtitle','$description', '$sector', '$closing', '$Contact', '$email', '$website')";

    if (mysqli_query($connection,$insertVacancy) === TRUE) {
                $message = base64_encode(urlencode("Vacancy Added."));
				header('Location:admin_vacancies_add.php?msg=' . $message);
				exit();
        }
    else {
        $message = base64_encode(urlencode("Error..!"));
        header('Location:admin_vacancies_add.php?msg=' . $message);
        exit();
        }

 }

mysqli_close($connection);
?>
