<?php 
	foreach($iklan as $output){
		echo $output->USERNAME_MEMBER . "<br>";
		echo $output->JUDUL . "<br>";
		echo $output->DESKRIPSI . "<br>";
		echo $output->TANGGAL . "<br>";
	}
 ?>