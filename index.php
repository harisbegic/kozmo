<?php include 'konekcija.php'; session_start(); ?>
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
 </style>

 <body>

<!-- Navbar -->
 <div class="w3-top">
   <div class="w3-bar w3-pink w3-card w3-left-align w3-large">
     <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-pink" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
     <a href="pocetna.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Početna</a>
     <a href="katalog.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Katalog</a>
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

 <!-- Header -->
 <header class="w3-container w3-blue w3-center" style="padding:128px 16px">
   <h1 class="w3-margin w3-jumbo"><b>Kozmo</b></h1>
   <p class="w3-xlarge">Anida Begić & Amina Zekan</p>
   <a href="katalog.php"><button class="w3-button w3-pink w3-padding-large w3-large w3-margin-top">Katalog</button></a>
 </header>

 <!-- First Grid -->
 <div class="w3-row-padding w3-padding-64 w3-container">
   <div class="w3-content">
     <div class="w3-twothird">
       <h1>Kratki osvrt</h1>
       <h5 class="w3-padding-32">Kompanija Kozmo postoji od 2010 godine. Prva poslovnica otvorena je u Zenici, Bosni i Hercegovini, kada su dvije studentice odlučile da pokušaju uvesti brendove koji se ne mogu pronaći u istoj.</h5>

       <p class="w3-text-grey">Nakon uspješne misije i uvoza najtraženijih brendova „The Balm“ &amp; „Laura Mercier“, 2012 godine otvorila se nova poslovnica u Banja Luci. Naše poslovnice se danas nalaze širom Evrope i Azije. Kozmo je tu da se pobrine da sve pronađete za njegu lica, kao i proizvode koji će vam pomoći da istaknete svoju prirodnu ljepotu.</p>
     </div>

     <div class="w3-third w3-center">
       <i class="fas fa-air-freshener w3-padding-64 w3-text-purple"></i>
     </div>
   </div>
 </div>

 <!-- Second Grid -->
 <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
   <div class="w3-content">
     <div class="w3-third w3-center">
       <i class="fas fa-broom w3-padding-64 w3-text-deep-purple w3-margin-right"></i>
     </div>

     <div class="w3-twothird">
       <h1>Kozmo</h1>
       <h5 class="w3-padding-32">Kod nas možete pronaći najprestižnije brendove poput „The Balm“, „Laura Mercier“, „Nars“, „Chanel“, „L&#39;Oreal“, „Max factor“, „Dior“, „YSL“, „CeraVe“, „Neutrogena“, „Clinique“, „GLossier“ i „Cetaphil“.</h5>

       <p class="w3-text-grey">Za sve tipove kože, pa i one najosjetljivije ima idealan proizvod. Najosjetljivije je uvijek lice i svi želimo da je ispravno njegovano. Proizvodi koje možete pronaći kod nas, garantovno su najbolji u tome!</p>
     </div>
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