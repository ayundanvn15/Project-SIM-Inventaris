<?php
include('../../../conn/config.php');
$id = $_GET['id_sarana'];


$query = mysqli_query($koneksi,"DELETE FROM tb_sarana WHERE id_sarana='$id'");

echo "<script>alert('Delete Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-sarana'>"; 

?>