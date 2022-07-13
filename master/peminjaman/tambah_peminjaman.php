<?php
include('../../../conn/config.php');
$nama 			= $_GET['nama'];
$nama_sarana 	= $_GET['nama_sarana'];
$ktp 			= $_GET['no_ktp'];
$jumlah 		= $_GET['jml_peminjaman'];
$jaminan 		= $_GET['jaminan'];
$tglp 			= $_GET['tgl_pinjam'];
$tglk 			= $_GET['tgl_kembali'];
$keperluan 		= $_GET['keperluan'];

$query = mysqli_query($koneksi,"INSERT INTO tb_peminjaman (nama,id_sarana,no_ktp,jml_peminjaman,jaminan,tgl_pinjam,tgl_kembali,keperluan)
						VALUES ('$nama', '$nama_sarana', '$ktp', '$jumlah', '$jaminan', '$tglp', '$tglk', '$keperluan')");

echo "<script>alert('Add data successfully!!')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?page=data-peminjaman'>";

?>