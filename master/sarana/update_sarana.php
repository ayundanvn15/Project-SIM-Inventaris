<?php
include('../../../conn/config.php');
$id = $_GET['id_sarana'];
$nama = $_GET['nama_sarana'];
$merk = $_GET['merk'];
$lokasi = $_GET['lokasi'];
$status = $_GET['status'];
$kondisi = $_GET['kondisi'];
$jumlah = $_GET['jumlah'];

$query = mysqli_query($koneksi,"UPDATE tb_sarana SET nama_sarana='$nama', merk='$merk', lokasi='$lokasi', status='$status', kondisi='$kondisi', jumlah='$jumlah' WHERE id_sarana='$id'");

echo "<script>alert('Data Edit Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-sarana'>"; 

?>