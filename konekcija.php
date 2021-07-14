<?php

$host= "localhost";
$ime= "root";
$sifra = "";

$baza = "kozmo";

$konekcija = mysqli_connect($host, $ime, $sifra, $baza);

if (!$konekcija) {
	echo "Konekcija neuspješna!";
}