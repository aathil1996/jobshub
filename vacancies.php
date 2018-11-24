<?php include('includes/dbconnection.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Vacancies</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
            .navigation .vacancies-active {
                background-color: #4CAF50;
            }

            .navigation li a:hover:not(.vacancies-active) {/* Current colour does not change when hover */
                background-color: #111;
            }
    </style>
</head>

<body>

    <?php include('includes/header.php') ?>

    <div class="row-100 div-c bg-green">
        <h1>Vacancies</h1>
    </div>

    <div class="row-100"><h2 class="error-msg"><?php include_once('includes/message.php'); ?></h2></div>

    <!-- Fetching Products PHP -->
    <?php

    $retrieve = 'SELECT * FROM vacancies'; //Selecting all data from Table
    $result = mysqli_query($connection, $retrieve); //Passing SQL


          echo "<table class=\"user\">
               <tr>
               <th>Provider Name</th>
                <th> Job Title </th>
                <th>Sector</th>
                <th>Closing Date</th>
                <th>More Details</th>
                  </tr>
              ";
        while($row  = mysqli_fetch_assoc($result)){
         if($row['Sectortype']=='1'){
              $type= "Government";
          }
          else{
              $type="Private";
          }

                 echo "<tr>

                        <td>".$row['Providername']."</td>
                        <td>".$row['Jobtitle']."</td>
                        <td>".$type."</td>
                        <td>".$row['ClosingDate']."</td>

                        <td>
                                <form action =\"vacancy_apply.php\" name=\"apply\" method=\"post\" >
                                    <input type=\"hidden\" value=" .$row['JobID']. " name=\"JobID\">
                                    <input class=\"form-button\" type=\"submit\" name=\"submit\" value=\"More Details\">
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
