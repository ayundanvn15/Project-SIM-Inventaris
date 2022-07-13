 <?php
$id = $_GET['id_masuk'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_masuk WHERE id_masuk='$id'");
$view = mysqli_fetch_array($query);


 ?>
 <section class="content">
    <div class="container-fluid">
      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Masuk Stok</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="master/masuk/update_masuk.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                       <div class="form-group">
                          <label for="formGroupExempleInput2">Nama</label>
                           <select type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Barang" name="nama" required>>
                              <option value="">--Pilih--</option>
                              <?php
                              $query = mysqli_query($koneksi, "SELECT * FROM tb_stok");
                                while ($msk = mysqli_fetch_array($query)) {
                                
                                ?>
                              <option value="<?php echo $msk['id_stok']; ?>"><?php echo $msk['nama']; ?></option>

                              <?php
                                  }
                              ?>
                              
                            </select>
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
                        <label>Kemasan</label>
                        <input type="text" class="form-control" placeholder="Kemasan" name='kemasan' value="<?php echo $view['kemasan'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" placeholder="Jumlah" name='jumlah_stok' value="<?php echo $view['jumlah'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" class="form-control" placeholder="Tanggal Masuk" name='tgl_masuk' value="<?php echo $view['tgl_masuk'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
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