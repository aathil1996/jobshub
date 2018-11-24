<!DOCTYPE html>
<html>

<head>
    <title>JOBS HUB</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>
    <div class="imgshow" align="center">

    <img class="slidimg" style="width:60%; height:400px; alignment-adjust:central;
        margin-bottom:20px;  margin-top:40px;  border:solid;"
        src="images/slide/image1.jpg" />

    <img class="slidimg" style="width:60%; height:400px; alignment-adjust:central;
        margin-top:40px; margin-bottom:20px;  border:solid;"
        src="images/slide/image2.png" />

    <img class="slidimg" style="width:60%; height:400px; alignment-adjust:central;
        margin-top:40px; margin-bottom:20px;  border:solid;"
        src="images/slide/image3.jpg" />

    </div>
    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("slidimg");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2300);
    }
    </script>
    <div class="row-100" align="center">
        <h1 class="font-white"> Darkness to Brightness..! </h1>
    </div>

    <div class="row-100">
        <img class="banner" src="images/banner1.jpg" width="100%" height="450px"  >
    </div>

    <div class="row-100">
        <p class="contents"> Are you really tired with finding correct places for you? No worry more..! You have reached the best Platform,
           yeah it's<a href="www.jobshub.lk"> jobshub.lk </a>we are with  1500+ rpoviders and 15000+ job seekers all aound the Sri Lanka.
          Find more about us on <a href="about.php"> About </a> page. Peace..!
    </div>
    <br/> <br/>
    <div class="row-100" align="center">
        <h1 class="font-white"> Apply..! </h1>
    </div>

    <div class="row-100">
        <img class="banner" src="images/banner2.jpg" width="100%" height="450px"  >
    </div>

    <div class="row-100">
        <p class="contents"> Every second that you  are spending for another works
           you are loosing better plae for you ass. Don't wait just click the Aplly button and just give a jump
           kick starts for your life..!
    </div>
    <br/> <br/>
    <div class="row-100" align="center">
        <h1 class="font-white"> Say No to paid Advertisments..! </h1>
    </div>
    <div class="row-100">
        <img class="banner" src="images/banner3.jpg" width="100%" height="450px"  >
    </div>
    <div class="row-100">
        <p class="contents"> We know, your HR managers are really tired with finding a good employee and
          your business is running out of the money for Advertisments. This is the best platform for hiring best
          people. Totally it's free. Just post and Try...!
    </div>

    <div class="row-100">
        <h1 class="font-white" align="center"'> Famous Job Platforms </h1>
    </div>
    <div class="row-25 bg-white"   >
        <a href="vacancies.php"><img  class="tiles" src="images/banner4.jpg"></a>
    </div>

    <div class="row-25 bg-white"   >
        <a href="vacancies.php"><img  class="tiles" src="images/banner7.gif"></a>
    </div>

    <div class="row-25 bg-white"   >
        <a href="vacancies.php"><img  class="tiles" src="images/banner5.jpg"></a>
    </div>
    <div class="row-25 bg-white"   >
        <a href="vacancies.php"><img class="tiles" src="images/banner6.png"></a>
    </div>

</body>
<?php include('includes/footer.php') ?>
</html>
