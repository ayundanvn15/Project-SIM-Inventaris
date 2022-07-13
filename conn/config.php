<?php
$koneksi = mysqli_connect('localhost','root', '', 'db_sim');

if(!$koneksi){
	die("Koneksi Gagal:". mysqli_connect_error());
}
else{
	echo "";
}
?>