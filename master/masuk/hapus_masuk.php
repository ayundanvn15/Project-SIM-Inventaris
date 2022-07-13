<?php
include('../../../conn/config.php');
$id = $_GET['id_masuk'];


$query = mysqli_query($koneksi,"DELETE FROM tb_masuk WHERE id_masuk='$id'");

echo "<script>alert('Delete Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-masuk-stok'>"; 

?>