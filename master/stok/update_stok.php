<?php
include('../../../conn/config.php');
$id = $_GET['id_stok'];
$nama = $_GET['nama'];
$merk = $_GET['merk'];
$kemasan = $_GET['kemasan'];
$jumlah = $_GET['jumlah_stok'];
$keterangan = $_GET['keterangan'];

$query = mysqli_query($koneksi,"UPDATE tb_stok SET nama='$nama', merk='$merk', kemasan='$kemasan', jumlah_stok='$jumlah', keterangan='$keterangan' WHERE id_stok='$id'");

echo "<script>alert('Data Edit Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-stok'>"; 

?>