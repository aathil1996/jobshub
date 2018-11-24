<?php include('includes/dbconnection.php') ?>
<?php include('includes/session.php') ?>

<?php
	//Unauthorized Access Check
    checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != '2'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:login.php?msg=' . $message);
       exit();
       }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Vacancies</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>

     <div class="row-25 bg-grey">
        <h1 class="div-c">Add Vacancies</h1>
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


      <form class="form-box" action="provider_vacancies_add_submit.php" method="post" enctype="multipart/form-data">
              <h3 class="error-msg"><?php include_once('includes/message.php'); ?></h3>
              <p>Enter Provider Name:</p>
              <input type="text" name="Providername" placeholder="Provider Name" required>

              <p>Enter Job Title:</p>
              <input type="text" name="Jobtitle" placeholder="Job Title" required>

              <p>Say abot Job (Job Description):</p>
              <input type="text" name="description" placeholder="Job Title" required>

              <p>Which Sector:</p>
              <select name="SectortypeID">
                <option value="1">Government</option>
                <option value="2">Private</option>
              </select>

              <p>Select Closing Date</p>
              <input type="date" name="ClosingDate" required>

              <p>Enter Your Contact Number:</p>
              <input type="number" name="Contact" placeholder="+941234567">

              <p>Enter Your E-mail:</p>
              <input type="email" name="email" placeholder="jobshub@jobshub.com">

              <p>Enter Your Website:</p>
              <input type="url" name="website" placeholder="www.jobshub.lk">

              <br><br>

              <input class="form-button" type="submit" name="submit" value="Add Vacancy">



      </form>


    </div>

</body>

</html>
