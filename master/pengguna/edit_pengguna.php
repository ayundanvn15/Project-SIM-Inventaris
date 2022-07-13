 <?php
$id = $_GET['id_pengguna'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE id_pengguna='$id'");
$view = mysqli_fetch_array($query);


 ?>
 <section class="content">
    <div class="container-fluid">
      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="master/pengguna/update_pengguna.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="Id" name='id_pengguna' value="<?php echo $view['id_pengguna'];?>"hidden>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name='tempat_lahir' value="<?php echo $view['tempat_lahir'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name='tgl_lahir' value="<?php echo $view['tgl_lahir'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name='alamat' value="<?php echo $view['alamat'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="jk" >
                          <option>--Pilih--</option>
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" class="form-control" placeholder="No Telepon" name='no_tlp' value="<?php echo $view['no_tlp'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" name='email' value="<?php echo $view['email'];?>">
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="level">
                          <option>--Pilih--</option>
                          <option>Administrator</option>
                          <option>Kabag</option>
                          <option>Staf</option>
                        </select>
                      </div>
                    </div>
                   </div>
                  
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
              </div>
              <!-- /.card-body -->
            </div>
  </div>
</section>