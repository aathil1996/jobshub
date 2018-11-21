<header class="navigation">
    <div class="row-100 bg-grey">
      <ul class="left-nav">
            <li><a class="home-active" href="index.php">Home</a></li>
            <li><a class="contact" href="contact_us.php">Contact Us</a></li>
            <li><a class="About" href="about_us.php">About Us</a></li>
      </ul>

            <ul class="right-nav">
            <?php require_once('includes/dbconnection.php');
             require_once('includes/session.php'); ?>

      <?php
      checkSession();
      if(isset($_SESSION['name'])){

          if("{$_SESSION['usertype']}" == '0'){
            echo "<li><a href=\"admin_dashboard.php\" class=\"active\">Admin Panel</a></li>";
            echo "<li><a href=\"logout.php\">Log Out</a></li>";
                            echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name'] ."</p>";
                }
                        elseif("{$_SESSION['usertype']}" == '1'){
            echo "<li><a href=\"seeker_dashboard.php\" class=\"active\">Job Seeker Dashboard</a></li>";
            echo "<li><a href=\"logout.php\">Log Out</a></li>";
                            echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " </p>";
                }
          elseif("{$_SESSION['usertype']}" == '2'){
            echo "<li><a href=\"Provider_dashboard.php\" class=\"active\">Vendor Dashboard</a></li>";
            echo "<li><a href=\"logout.php\">Log Out</a></li>";
                            echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']." </p>";
                }

                    }
      else{
        echo "<li><a class=\"active\" href=\"login.php\">Login</a></li>";
        echo "<li><a href=\"signup.php\">Sign Up</a></li>";
        }
            ?>

            </ul>




    </div>
</header>
