<?php
    $nama_stok = $_GET['nama'];
    $jumlah = $_GET['jumlah'];
    $tglk = $_GET['tgl_keluar'];
    $ket = $_GET['keterangan'];

    include ('../../../conn/config.php');    
    $x =mysqli_query($koneksi, "SELECT * FROM tb_stok WHERE id_stok='$nama_stok'");
    $y   =mysqli_fetch_array($x);
    $z   =$y['jumlah_stok'];
    //menghitung jumlah stok
    $total    =$z - $jumlah;
    
    if ($z < $jumlah) {
        ?>
        <script language="JavaScript">
            alert('Oops! theres a problem');
            document.location='../../index.php?page=data-keluar-stok';
        </script>
        <?phpkeluar
    }
    //proses    
    else{
        $insert =mysqli_query($koneksi, "INSERT INTO tb_keluar (id_stok, jumlah, tgl_keluar, keterangan) VALUES ('$nama_stok', '$jumlah', '$tglk', '$ket')");
            if($insert){
                //update stok
                $upstok= mysqli_query($koneksi, "UPDATE tb_stok SET jumlah_stok='$total' WHERE id_stok='$nama_stok'");
                ?>
                <script language="JavaScript">
                    alert('Good! Data input successful');
                    document.location='../../index.php?page=data-keluar-stok';
                </script>
                <?php
            }
            else {
                echo "<div><b>Oops!</b> 404 Error Server.</div>";
            }
    }
?>