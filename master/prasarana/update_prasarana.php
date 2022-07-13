<?php
include('../../../conn/config.php');
$id = $_GET['id_prasarana'];
$nama = $_GET['nama'];
$lokasi = $_GET['lokasi'];
$luas = $_GET['luas'];
$keterangan = $_GET['keterangan'];

$query = mysqli_query($koneksi,"UPDATE tb_prasarana SET nama='$nama', lokasi='$lokasi', luas='$luas', keterangan='$keterangan' WHERE id_prasarana='$id'");

echo "<script>alert('Data Edit Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-prasarana'>"; 

?>