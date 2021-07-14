<?php 
session_start(); 
include "konekcija.php";

if (isset($_POST['korisnicko_ime']) && isset($_POST['sifra'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$korisnicko_ime = validate($_POST['korisnicko_ime']);
	$sifra = validate($_POST['sifra']);

	if (empty($korisnicko_ime)) {
		header("Location: index.php?error=Upišite korisničko ime");
	    exit();
	}else if(empty($sifra)){
        header("Location: index.php?error=Upišite šifru");
	    exit();
	}else{
		$sql = "SELECT * FROM korisnici WHERE korisnicko_ime='$korisnicko_ime' AND sifra='$sifra'";

		$result = mysqli_query($konekcija, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['korisnicko_ime'] === $korisnicko_ime && $row['sifra'] === $sifra) {
            	$_SESSION['korisnicko_ime'] = $row['korisnicko_ime'];
            	$_SESSION['ime'] = $row['ime'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: pocetna.php");
		        exit();
            }else{
				header("Location: index.php?error=Netacno ime ili sifra");
		        exit();
			}
		}else{
			header("Location: index.php?error=Netacno ime ili sifra");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}