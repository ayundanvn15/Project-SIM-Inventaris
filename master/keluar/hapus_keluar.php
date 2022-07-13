<?php
include('../../../conn/config.php');
$id = $_GET['id_keluar'];


$query = mysqli_query($koneksi,"DELETE FROM tb_keluar WHERE id_keluar='$id'");

echo "<script>alert('Delete Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-keluar-stok'>"; 

?>