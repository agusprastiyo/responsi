<?php
	include("hdr.html");
	include("form.html");

	$nim=$_POST["nim"];
	$nama=$_POST["nama"];
	$kota=$_POST["kota"];

	$fileku=fopen("data.txt","a");
	$data=$nim.";".$nama.";".$kota."\n";
	fwrite($fileku,$data);
	fclose($fileku);

	echo "<pre>";
	include("data.txt");
	echo "</pre>";
	include("ftr.html");
?>