 <?php
$id = $_GET['id_peminjaman'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman WHERE id_peminjaman='$id'");
$view = mysqli_fetch_array($query);


 ?>
 <section class="content">
    <div class="container-fluid">
      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="master/peminjaman/update_peminjaman.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="formGroupExempleInput2">Nama Barang</label>
                        <select type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Barang" name="nama" required>>
                            <option value="">--Pilih--</option>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_sarana");
                              while ($pmnj = mysqli_fetch_array($query)) {
                              
                              ?>
                            <option value="<?php echo $pmnj['id_sarana']; ?>"><?php echo $pmnj['nama_sarana']; ?></option>

                            <?php }?>
                  
                        </select>
                      </div>  
                      <div class="form-group">
                        <label>Nama Peminjam</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Peminjam" name="nama" value="<?php echo $view['nama'];?>" required>
                      </div>                 
             
                      <div class="form-group">
                        <label>No KTP</label>
                        <input type="text" class="form-control" placeholder="No KTP" name='no_ktp' value="<?php echo $view['no_ktp'];?>">
                      </div>
                   
                      <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" placeholder="Jumlah" name='jml_peminjaman' value="<?php echo $view['jml_peminjaman'];?>">
                      </div>
                  
                      <div class="form-group">
                        <label>Jaminan</label>
                        <input type="text" class="form-control" placeholder="Jaminan" name='jaminan' value="<?php echo $view['jaminan'];?>">
                      </div>
                
                      <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input type="date" class="form-control" placeholder="Tanggal Pinjam" name='tgl_pinjam' value="<?php echo $view['tgl_pinjam'];?>">
                      </div>
                   
                      <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" class="form-control" placeholder="Tanggal Kembali" name='tgl_kembali' value="<?php echo $view['tgl_kembali'];?>">
                      </div>
                   
                      <div class="form-group">
                        <label>Keperluan</label>
                        <input type="text" class="form-control" placeholder="Keperluan" name='keperluan' value="<?php echo $view['keperluan'];?>">
                      </div>
                    </div>
                  </div>
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  <button type="submit" class="btn btn-sm btn-info">Save</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
  </div>
</section>