<?php
include('../../../conn/config.php');
$nama = $_GET['nama'];
$lokasi = $_GET['lokasi'];
$luas = $_GET['luas'];
$keterangan = $_GET['keterangan'];

$query = mysqli_query($koneksi,"INSERT INTO tb_prasarana (id_prasarana, nama, lokasi, luas, keterangan) VALUES ('','$nama', '$lokasi', '$luas', '$keterangan')");

echo "<script>alert('Add data successfully!!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-prasarana'>";

?>