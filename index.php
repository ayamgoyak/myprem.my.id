<?php
require "function.php";
date_default_timezone_set("Asia/Jakarta");

$run = banner($Green,$White);
echo " Spotify Account Generator\n ϟ 1. Account Generator\n ϟ 2. Soon Update\n\n Masukan Pilihanmu : ";
$pilih = trim(fgets(STDIN));
if($pilih == "1"){
	$run = generateAccount($Red,$White,$Green,$Grey,$Blue);
	} else {
		exit("\n$White ϟ $Red Soon updates, i'll try harder brouwh\n\n");
}
?>
