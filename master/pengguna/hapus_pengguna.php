<?php
include('../../../conn/config.php');
$id = $_GET['id_pengguna'];


$query = mysqli_query($koneksi,"DELETE FROM tb_pengguna WHERE id_pengguna='$id'");

echo "<script>alert('Delete Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-pengguna'>"; 

?>