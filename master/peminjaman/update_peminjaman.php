<?php
include('../../../conn/config.php');
$id = $_GET['id_peminjaman'];
$nama = $_GET['id_sarana'];
$nama = $_GET['nama'];
$ktp = $_GET['no_ktp'];
$jumlah = $_GET['jml_peminjaman'];
$jaminan = $_GET['jaminan'];
$tglp = $_GET['tgl_pinjam'];
$tglk = $_GET['tgl_kembali'];
$keperluan = $_GET['keperluan'];

$query = mysqli_query($koneksi,"UPDATE tb_peminjaman SET id_sarana='$nama', nama='$nama', no_ktp='$ktp', jml_peminjaman='$jumlah', jaminan='$jaminan', tgl_pinjam='$tglp', tgl_kembali='$tglk', keperluan='$keperluan'WHERE id_peminjaman='$id'");

echo "<script>alert('Data Edit Succeeded!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-peminjaman'>"; 

?>