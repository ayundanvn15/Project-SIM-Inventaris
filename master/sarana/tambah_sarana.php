<?php
include('../../../conn/config.php');
$nama = $_GET['nama_sarana'];
$merk = $_GET['merk'];
$lokasi = $_GET['lokasi'];
$status = $_GET['status'];
$kondisi = $_GET['kondisi'];
$jumlah = $_GET['jumlah'];

$insert = mysqli_query($koneksi,"INSERT INTO tb_sarana (id_sarana, nama_sarana, merk, lokasi, status, kondisi, jumlah) VALUES ('','$nama', '$merk', '$lokasi', '$status', '$kondisi', '$jumlah')");


echo "<script>alert('Add data successfully!!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-sarana'>";

