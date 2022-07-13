<?php
include('../../../conn/config.php');
$id = $_GET['id_keluar'];
$nama = $_GET['nama'];
$jumlah = $_GET['jumlah'];
$tglk = $_GET['tgl_keluar'];
$ket = $_GET['keterangan'];

$query = mysqli_query($koneksi,"UPDATE tb_keluar SET nama='$nama', jumlah='$jumlah', tgl_keluar='$tglk', keterangan='$ket' WHERE id_keluar='$id'");

echo "<script>alert('Data Edit Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-keluar-stok'>"; 

?>