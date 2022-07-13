<?php
include('../../../conn/config.php');
$id = $_GET['id_peminjaman'];


$query = mysqli_query($koneksi,"DELETE FROM tb_peminjaman WHERE id_peminjaman='$id'");

echo "<script>alert('Delete Edit Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-peminjaman'>";

?>