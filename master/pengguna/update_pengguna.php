<?php
include('../../../conn/config.php');
$id = $_GET['id_pengguna'];
$nama = $_GET['nama'];
$tl = $_GET['tempat_lahir'];
$tgl = $_GET['tgl_lahir'];
$alamat = $_GET['alamat'];
$jk = $_GET['jk'];
$tlp = $_GET['no_tlp'];
$email = $_GET['email'];
$level = $_GET['level'];


$query = mysqli_query($koneksi,"UPDATE tb_pengguna SET nama='$nama', tempat_lahir='$tl', tgl_lahir='$tgl', alamat='$alamat', jk='$jk', no_tlp='$tlp', email='$email', level='$level' WHERE id_pengguna='$id'");

echo "<script>alert('Data Edit Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-pengguna'>"; 


?>