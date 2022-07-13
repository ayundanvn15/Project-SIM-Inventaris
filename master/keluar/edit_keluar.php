 <?php
$id = $_GET['id_keluar'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_keluar WHERE id_keluar='$id'");
$view = mysqli_fetch_array($query);


 ?>
 <section class="content">
    <div class="container-fluid">
      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Keluar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="master/keluar/update_keluar.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" placeholder="Nama Barang" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="Id" name='id_keluar' value="<?php echo $view['id_keluar'];?>"hidden>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" placeholder="Jumlah" name='jumlah' value="<?php echo $view['jumlah'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Keluar</label>
                        <input type="date" class="form-control" placeholder="Tanggal Keluar" name='tgl_keluar' value="<?php echo $view['tgl_keluar'];?>">
                      </div>
                    </div>
                   </div>
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" placeholder="Keterangan" name='keterangan' value="<?php echo $view['keterangan'];?>">
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