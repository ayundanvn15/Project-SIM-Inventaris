<?php
include('../../../conn/config.php');
$id = $_GET['id_prasarana'];


$query = mysqli_query($koneksi,"DELETE FROM tb_prasarana WHERE id_prasarana='$id'");

echo "<script>alert('Delete Succeeded!!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-prasarana'>";

?>