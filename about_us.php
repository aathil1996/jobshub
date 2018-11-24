<!DOCTYPE html>
<html>

<head>
    <title>JOBS HUB</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;

}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

</head>

<body>

    <?php include('includes/header.php') ?>
    <div class="row-100" align="center">
        <h1 class="font-white"> The Team </h1>
    </div>
    <br/> <br/>
    <div class="card">
          <img src="images/Aathil.jpg" alt="Aathil" class="row-25" style="width:100%">
          <h1>Aathil Ahamed</h1>
          <p class="title">BSc of Information Systems (Reading)</p>
          <p>University of Colombo School of Computing</p>

     <p><button>Contact</button></p>
    </div>
    <br/> <br/>
      <div class="card">
            <img src="images/bavindu.jpg" alt="bavindu" style="width:100%">
            <h1> Bavindu Dilshan</h1>
            <p class="title">BSc of Information Systems (Reading)</p>
            <p>University of Colombo School of Computing</p>

       <p><button>Contact</button></p>
      </div>

  <br/> <br/>
    <div class="card">
          <img src="images/yasindi.jpg" alt="Yasindi" style="width:100%">
          <h1> Yasindi Hettiarachchi </h1>
          <p class="title">BSc of Information Systems (Reading)</p>
          <p>University of Colombo School of Computing</p>

     <p><button>Contact</button></p>
    </div>

    <br/> <br/>
      <div class="card">
            <img src="images/asangika.jpg" alt="asangika" style="width:100%">
            <h1> Asangika Sandamini </h1>
            <p class="title">BSc of Information Systems (Reading)</p>
            <p>University of Colombo School of Computing</p>

       <p><button>Contact</button></p>
      </div>

      <br/> <br/>
        <div class="card">
              <img src="images/bhagya.jpg" alt="bhagya" style="width:100%">
              <h1> Bhagya Kumaranayake </h1>
              <p class="title">BSc of Information Systems (Reading)</p>
              <p>University of Colombo School of Computing</p>

         <p><button>Contact</button></p>
        </div>

</body>
<?php include('includes/footer.php') ?>
</html>
