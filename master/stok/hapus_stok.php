<?php
include('../../../conn/config.php');
$id = $_GET['id_stok'];


$query = mysqli_query($koneksi,"DELETE FROM tb_stok WHERE id_stok='$id'");

echo "<script>alert('Delete Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-stok'>";

?>