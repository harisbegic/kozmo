<?php 
session_start();
include 'konekcija.php';

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($konekcija, "DELETE FROM narudzbe WHERE id=$id");
	header('location: narudzbe.php');
}

if (isset($_SESSION['id']) && isset($_SESSION['korisnicko_ime'])) {
?>

  <!DOCTYPE html>
  <html lang="en">
  <title>Kozmo</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/4864965117.js" crossorigin="anonymous"></script>
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
  .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
  .fa-air-freshener,.fa-broom {font-size:200px}
  header {
    width: 100%;
    background-image: url("https://dr2consultants.cn/wp-content/uploads/2020/08/cbd-exploding-cosmetics-industry-does-it-make-difference.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
  }
    input {
     border: 2px solid #ccc;
     width: 95%;
     padding: 10px;
     border-radius: 5px;
   }
   form {
     width: 500px;
     border: 2px solid #ccc;
     padding: 30px;
     background: #fff;
     margin: 10px auto;
     border-radius: 15px;
   }
  </style>

  <body>
    <h1>Narudžbe</h1>
  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-pink w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-pink" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="pocetna.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Početna</a>
      <a href="katalog.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Katalog</a>
     <a href="komentari.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Komentari</a>
      <a href="dodaj.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Dodaj proizvod</a>
      <a href="uredi.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Uredi proizvod</a>
      <a href="obrisi.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3--hover-white">Obriši proizvod</a>
      <a href="narudzbe.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Narudžbe</a>
      <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
       <a href="pocetna.php" class="w3-bar-item w3-button w3-padding-large">Početna</a>
      <a href="katalog.php" class="w3-bar-item w3-button w3-padding-large">Katalog</a>
      <a href="komentari.php" class="w3-bar-item w3-button w3-padding-large">Komentari</a>
      <a href="dodaj.php" class="w3-bar-item w3-button w3-padding-large">Dodaj proizvod</a>
      <a href="uredi.php" class="w3-bar-item w3-button w3-padding-large">Uredi proizvod</a>
      <a href="obrisi.php" class="w3-bar-item w3-button w3-padding-large">Obriši proizvod</a>
      <a href="narudzbe.php" class="w3-bar-item w3-button w3-padding-large">Narudžbe</a>    
      <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
    </div>
  </div>
 <div class="w3-row-padding w3-padding-64 w3-container w3-center">

  <?php $upit = mysqli_query($konekcija, "SELECT * FROM narudzbe"); ?>
  <table style="margin-top: 100px; margin-bottom: 50px" class="w3-table w3-bordered w3-border w3-centered">
   <thead>
     <tr>
       <th>Ime proizvoda</th>
       <th>Ime i prezime</th>
       <th>Adresa</th>
       <th>Broj kartice</th>
       <th>Broj telefona</th>
       <th>Radnja</th>
     </tr>
   </thead>
   
   <?php while ($podaci = mysqli_fetch_array($upit)) { ?>
     <tr>
       <td><?php echo $podaci['ime_proizvoda']; ?></td>
       <td><?php echo $podaci['ime_prezime']; ?></td>
       <td><?php echo $podaci['adresa']; ?></td>
       <td><?php echo $podaci['broj_kartice']; ?></td>
       <td><?php echo $podaci['broj_telefona']; ?></td>
       <td>
         <a href="narudzbe.php?del=<?php echo $podaci['id']; ?>" class="w3-button w3-indigo">Završi</a>
       </td>
     </tr>
   <?php } ?>
  </table>
   
 </div>
  <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
      <h1 class="w3-margin w3-xlarge">Žena bilo koje dobi može izgledati sjajno. Glavna stvar je odabrati pravu njegu.</h1>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity">  
    <div class="w3-xlarge w3-padding-32">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
      <p>2021</p>
      <p>kontakt@kozmo.ba</p>
     <p>Trg BiH 6, Zenica 72000</p>
   </div>
  </footer>

  <script>
  // Used to toggle the menu on small screens when clicking on the menu button
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>

  </body>
  </html>

 <?php 
 }else{
      header("Location: index.php");
      exit();
 }
  ?>