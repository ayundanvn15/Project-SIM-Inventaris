<?php
include('../../../conn/config.php');
$nama = $_GET['nama'];
$tl = $_GET['tempat_lahir'];
$tgl = $_GET['tgl_lahir'];
$alamat = $_GET['alamat'];
$jk = $_GET['jk'];
$tlp = $_GET['no_tlp'];
$email = $_GET['email'];
$level = $_GET['level'];

$query = mysqli_query($koneksi,"INSERT INTO tb_pengguna (id_pengguna, nama, tempat_lahir, tgl_lahir, alamat, jk, no_tlp, email, level) VALUES ('', '$nama', '$tl', '$tgl', '$alamat', '$jk', '$tlp', '$email', '$level')");

echo "<script>alert('Add data successfully!!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-pengguna'>";

?>