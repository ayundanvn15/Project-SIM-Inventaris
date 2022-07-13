<?php
include('../../../conn/config.php');
$nama = $_GET['nama'];
$merk = $_GET['merk'];
$kemasan = $_GET['kemasan'];
$jumlah = $_GET['jumlah_stok'];
$keterangan = $_GET['keterangan'];

$query = mysqli_query($koneksi,"INSERT INTO tb_stok (id_stok, nama, merk, kemasan, jumlah_stok, keterangan) VALUES ('','$nama', '$merk', '$kemasan', '$jumlah', '$keterangan')");

echo "<script>alert('Add data successfully!!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-stok'>";

?>