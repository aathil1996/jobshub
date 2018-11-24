<?php include('includes/dbconnection.php') ?>
<?php include('includes/session.php') ?>

<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="login-body">

    <?php include('includes/header.php') ?>
    <div class="row-100">
        <div class="login-box">

        <h3 class="error-msg"><?php include('includes/message.php'); ?></h3>

        <img src="images/login/user.png" class="avatar">
            <h1>Login Here</h1>
                <form action="login_submit.php" method="post">
                    <p>E-mail/User Name</p>
                    <input type="text" name="email" placeholder="Enter Your  E-mail ID or User Name" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Your Password" required>
                    <input type="submit" name="submit" value="Login">
                </form>

        </div>
    </div>

</body>
<?php include('includes/footer.php') ?>
</html>
