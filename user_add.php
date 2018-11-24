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
    <title>Add Users</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>
        <hr>
        <div class="row-50">
            <h1 class="div-c">Add Users</h1>
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

        <div class="row25">
            <br>

        </div>
    <div class="row-100">

            <h2 class="error-msg"><?php include_once('includes/message.php'); ?></h2>
               <form class="form-box" action="user_add_submit.php" method="post" enctype="multipart/form-data">
                    <p>Name</p>
                    <input type="text" name="name" placeholder="Enter User's name" required>

                    <p>Email address</p>
                    <input type="email" name="email" placeholder="Enter User's email" required>

                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter User's Password" id="password" required>

                    <p>Confirm Password</p>
                    <input type="password" name="password2" placeholder="Enter User's Password" id="confirm_password" required>

                    <p>Select User Type</p>
                    <select name="usertype" class="m-b-20">
                        <option value="0">Admin</option>
                        <option value="1">Seeker</option>
                        <option value="2">Provider</option>

                    </select>

                    <p>Contact number</p>
                    <input type="number" name="contact" placeholder="+941234567"  required>
                    <br/><br/>
                    <input type="submit" name="submit" value="Add User" class="form-button">
                </form>
        </div>
    </div>



</body>

    <?php include('includes/footer.php') ?>
</html>
