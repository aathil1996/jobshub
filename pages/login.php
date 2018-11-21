<?php include('./includes/connection.php') ?>
<?php include('../includes/session.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Log In</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>


<body class="login-body">
  <!-- Header Section -->
  <?php include('../includes/header.php') ?>
    <!-- End of Header Section -->

    <!-- Login form -->
  <div class="row-100">
    <div class="loginbox">
      <h2 class="error-msg"><?php include('message.php'); ?></h2>
      <h1>Login Form</h1>
      <p>Please fill in your credentials to login.</p>
      <div class="imgcontainer">
        <img src="../images/user.png" alt="Avatar" class="avatar">
      </div>
      <form action="login-submit.php" method="post">
          <p>Email</p>
          <input type="text" name="email" placeholder="Enter Your email Address" required>
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter Your Password" required>
          <input type="submit" name="submit" value="Login">
      </form>
    </div>
  </div>
    <!-- End of login form -->

    <!-- Footer Section -->
    <?php include '../structure/footer.php'; ?>
    <!-- End of Footer Section -->
  </body>
  </html>
