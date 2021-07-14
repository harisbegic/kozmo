<?php 
session_start();
include "konekcija.php";

if(empty($_POST['ime'])) {
  $ime_error = "Unesite ime";
}

if(empty($_POST['vrsta'])) {
  $vrsta_error = "Unesite vrstu";
}

if(empty($_POST['brend'])) {
  $brend_error = "Unesite brend";
}

if(empty($_POST['poslovnica'])) {
  $poslovnica_error = "Unesite poslovnicu";
}

if(empty($_POST['stanje'])) {
  $stanje_error = "Unesite stanje";
}

if(empty($_POST['cijena'])) {
  $cijena_error = "Unesite cijenu";
}

if(empty($_POST['slika'])) {
  $slika_error = "Unesite sliku";
}

if(isset($_POST['unos'])) {
  $ime = $_POST['ime'];
  $vrsta = $_POST['vrsta'];
  $brend = $_POST['brend'];
  $poslovnica = $_POST['poslovnica'];
  $stanje = $_POST['stanje'];
  $cijena = $_POST['cijena'];

  $mjesto = "slike/".basename($_FILES['slika']['name']);

  $slika = $_FILES['slika']['name'];

  $sql = "INSERT INTO proizvodi (ime, vrsta, brend, poslovnica, stanje, cijena, slika) VALUES ('$ime', '$vrsta', '$brend', '$poslovnica', '$stanje', '$cijena', '$slika')";

  mysqli_query($konekcija, $sql);

  if(move_uploaded_file($_FILES['slika']['tmp_name'], $mjesto)) {
    $poruka = "Slika uploadovana uspješno!";
  } else {
    $poruka = "Greška.";
  }

  header('location: katalog.php'); 
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
 .center {
   margin: auto;
   width: 75%;
 }

 </style>

 <body>

 <!-- Navbar -->
 <div class="w3-top">
   <div class="w3-bar w3-pink w3-card w3-left-align w3-large">
     <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-pink" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
     <a href="pocetna.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Početna</a>
     <a href="katalog.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Katalog</a>
     <a href="komentari.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Komentari</a>
     <a href="dodaj.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Dodaj proizvod</a>
     <a href="uredi.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Uredi proizvod</a>
     <a href="obrisi.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Obriši proizvod</a>
     <a href="narudzbe.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Narudžbe</a>
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
  <h1>Dodaj novi proizvod</h1>
 <div class="w3-card-4 center">
 <form method="post" action="dodaj.php" class="w3-container" enctype="multipart/form-data" autocomplete="off">
  
    <label>Ime</label>
    <input type="text" name="ime" class="w3-input w3-border" required>
    <span><?php echo $ime_error; ?></span>
    <label>Vrsta</label>
    <input type="text" name="vrsta" class="w3-input w3-border" required>
    <span><?php echo $vrsta_error; ?></span>
    <label>Brend</label>
    <input type="text" name="brend" class="w3-input w3-border" required>
    <span><?php echo $brend_error; ?></span>
    <label>Poslovnica</label>
    <input type="text" name="poslovnica" class="w3-input w3-border" required>
    <span><?php echo $poslovnica_error; ?></span>
    <label>Stanje</label>
    <input type="text" name="stanje" class="w3-input w3-border" required>
    <span><?php echo $stanje_error; ?></span>
    <label>Cijena</label>
    <input type="text" name="cijena" class="w3-input w3-border" required>
    <?php echo $cijena_error; ?>
    <label>Slika</label>
    <input type="file" name="slika" class="w3-input w3-border" required>
    <span><?php echo $slika_error; ?></span>
    <button class="w3-button w3-green" type="submit" name="unos" style="margin-top: 10px">Unesi</button>
  </div>
 </form>
</div>
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