 <?php
$id = $_GET['id_sarana'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_sarana WHERE id_sarana='$id'");
$view = mysqli_fetch_array($query);


 ?>
 <section class="content">
    <div class="container-fluid">
      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Sarana</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="master/sarana/update_sarana.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama_sarana' value="<?php echo $view['nama_sarana'];?>">
                        <input type="text" class="form-control" placeholder="Id" name='id_sarana' value="<?php echo $view['id_sarana'];?>"hidden>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Merk</label>
                        <input type="text" class="form-control" placeholder="Merk" name='merk' value="<?php echo $view['merk'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Lokasi</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="lokasi" required>
                          <option>--Pilih--</option>
                          <option>Gudang</option>
                          <option>Ruang 1</option>
                          <option>Ruang 2</option>
                          <option>Ruang 3</option>
                        </select>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                          <option>--Pilih--</option>
                          <option>Milik Sendiri</option>
                          <option>Sewa</option>
                        </select>
                      </div>
                    </div>
                   </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kondisi</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="kondisi" required>
                          <option>--Pilih--</option>
                          <option>Bagus & layak Pakai</option>
                          <option>Rusak</option>
                        </select>
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  <button type="submit" class="btn btn-sm btn-info">Save</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
  </div>
</section>
