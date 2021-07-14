<?php 

include 'konekcija.php';
session_start();
$pregled = $_GET['pregled'];

$upit = mysqli_query($konekcija, "SELECT * FROM proizvodi WHERE id='$pregled'");

if(isset($_POST['narudzba'])) {
  $ime_proizvoda = $_POST['ime_proizvoda'];
  $ime_prezime = $_POST['ime_prezime'];
  $adresa = $_POST['adresa'];
  $broj_kartice = $_POST['broj_kartice'];
  $broj_telefona = $_POST['broj_telefona'];

  $sql = "INSERT INTO narudzbe (ime_proizvoda, ime_prezime, adresa, broj_kartice, broj_telefona) VALUES ('$ime_proizvoda', '$ime_prezime', '$adresa', '$broj_kartice', '$broj_telefona')";

  mysqli_query($konekcija, $sql);

  header('location: katalog.php'); 
}

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
      <a href="katalog.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Katalog</a>
      <a href="komentari.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Komentari</a>
      <?php 
      

      if (isset($_SESSION['id']) && isset($_SESSION['korisnicko_ime'])) {

       ?>
      <a href="dodaj.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Dodaj proizvod</a>
      <a href="uredi.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Uredi proizvod</a>
      <a href="obrisi.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Obriši proizvod</a>
      <a href="narudzbe.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Narudžbe</a>
      <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
      <?php 
      }else{
      ?> 
       <a href="login-forma.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin Login</a>
     <?php    
      }
       ?>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
       <a href="pocetna.php" class="w3-bar-item w3-button w3-padding-large">Početna</a>
      <a href="katalog.php" class="w3-bar-item w3-button w3-padding-large">Katalog</a>
      <a href="komentari.php" class="w3-bar-item w3-button w3-padding-large">Komentari</a>
      <?php 

      if (isset($_SESSION['id']) && isset($_SESSION['korisnicko_ime'])) {

       ?>
      <a href="dodaj.php" class="w3-bar-item w3-button w3-padding-large">Dodaj proizvod</a>
      <a href="uredi.php" class="w3-bar-item w3-button w3-padding-large">Uredi proizvod</a>
      <a href="obrisi.php" class="w3-bar-item w3-button w3-padding-large">Obriši proizvod</a>
      <a href="narudzbe.php" class="w3-bar-item w3-button w3-padding-large">Narudžbe</a>      
      <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
       <?php 
       }else{
       ?> 
        <a href="login-forma.php" class="w3-bar-item w3-button w3-padding-large">Admin Login</a>
      <?php    
       } 
       ?>
    </div>
  </div>
<div class="w3-row-padding w3-padding-64 w3-container w3-center">

	<div class="w3-card-4">
		<header class="w3-container w3-indigo">
		  <h1>Proizvod</h1>
		</header>
		<?php while ($podaci = mysqli_fetch_array($upit)) { 
	  	echo "<img src='slike/".$podaci['slika']."' width='350px' height='200px'>";
	  ?>
	  <div class="w3-container w3-center">
		  <h2><?php echo $podaci['ime'] ?></h2>
		  <p class="title"><b>Brend</b> - <?php echo $podaci['brend'] ?></p>
		  <p><b>Vrsta</b> - <?php echo $podaci['vrsta'] ?></p>
		  <p><b>Poslovnica</b> - <?php echo $podaci['poslovnica'] ?></p>
		  <p><b>Stanje</b> - <?php echo $podaci['stanje'] ?></p>
		  <p><b>Cijena</b> - <?php echo $podaci['cijena'] ?></p>
		  <hr>
      <div class="w3-card-4 center" style="margin-bottom: 20px">
		  <h3>Narudžba</h3>
		  <form method="post" action="pregled.php" enctype="multipart/form-data" class="w3-container">
		   
		     <label>Ime i prezime</label>
		     <input type="text" name="ime_prezime" class="w3-input w3-border" required>

		     <input type="hidden" name="ime_proizvoda" value="<?php echo $podaci['ime']; ?>" required>
		   
		     <label>Adresa</label>
		     <input type="text" name="adresa" class="w3-input w3-border" required>
		   
		     <label>Broj kartice</label>
		     <input type="text" name="broj_kartice" class="w3-input w3-border" required>

		     <label>Broj telefona</label>
		     <input type="text" name="broj_telefona" class="w3-input w3-border" required>

		     <button class="w3-button w3-green" type="submit" name="narudzba" style="margin-top: 10px">Naruči</button>
		   </div>
		  </form>
      </div>
		<?php } ?> 
	  </div>
	  <footer class="w3-container w3-indigo">
	  	<h3>Kozmo</h3>
	  </footer>
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