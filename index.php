<!DOCTYPE html>
<html>

<head>
    <title>JOBS HUB</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include('includes/header.php') ?>
    <div class="imgshow" align="center">

    <img class="slidimg" src="images/slide/img1.jpg" style="width:60%; height:400px; alignment-adjust:central; margin-bottom:20px;  margin-top:40px;  border:solid 4px #FF0000;" />

    <img class="slidimg" style="width:60%; height:400px; alignment-adjust:central;  margin-top:40px; margin-bottom:20px;  border:solid 4px #FF0000;;" src="images/slide/img2.jpg" />

    <img class="slidimg" style="width:60%; height:400px; alignment-adjust:central;  margin-top:40px; margin-bottom:20px;  border:solid 4px #FF0000;;" src="images/slide/img3.jpg" />

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
    setTimeout(carousel, 1600);
    }
    </script>
    
    <div class="row-100">
        <img class="banner" src="images/banner1.jpg" width="100%" height="450px"  >
    </div>
    <div class="row-100">
        <p> dafsdg xfgzfdvzx  dsgcx erhb  dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
          dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
          dafsdg xfgzfdvzx  dsgcx erhb  dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
            dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
            dafsdg xfgzfdvzx  dsgcx erhb  dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
              dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
              dafsdg xfgzfdvzx  dsgcx erhb  dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
                dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
                dafsdg xfgzfdvzx  dsgcx erhb  dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
                  dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
                  dafsdg xfgzfdvzx  dsgcx erhb  dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
                    dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb dafsdg xfgzfdvzx  dsgcx erhb
                  </p>
    </div>
    <div class="row-100">
        <h1 class="font-white"> Famous Job Platforms </h1>
    </div>
    <div class="row-25 bg-white"   >
        <a href="products.php"><img  class="tiles" src="images/cocacola.jpg"></a>
    </div>

    <div class="row-25 bg-white"   >
        <a href="products.php"><img  class="tiles" src="images/fanta.jpg"></a>
    </div>

    <div class="row-25 bg-white"   >
        <a href="products.php"><img  class="tiles" src="images/7up.png"></a>
    </div>
    <div class="row-25 bg-white"   >
        <a href="products.php"><img class="tiles" src="images/sprite.jpg"></a>
    </div>

    <?php include('includes/footer.php') ?>

</body>

</html>
