    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Add Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Level</th>
                    <?php
                    if($_SESSION['level']== 'administrator') {?>

                    <th>Action</th> <?php } ?>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna");
                    while ($pgn = mysqli_fetch_array($query)) {
                      $no++
                    ?>
                  <tr>
                    <td width="2%"><?php echo $no?></td>
                    <td><?php echo $pgn['nama'];?></td>
                    <td><?php echo $pgn['tempat_lahir'];?></td>
                    <td><?php echo $pgn['tgl_lahir'];?></td>
                    <td><?php echo $pgn['alamat'];?></td>
                    <td><?php echo $pgn['jk'];?></td>
                    <td><?php echo $pgn['no_tlp'];?></td>
                    <td><?php echo $pgn['email'];?></td>
                    <td><?php echo $pgn['level'];?></td>
                    <?php
                      if($_SESSION['level']== 'administrator') {?>
                    <td>
                      <a onclick="hapus_pengguna(<?php echo $pgn['id_pengguna']?>)" class="btn btn-sm btn-danger">Delete</a>
                      <a href="index.php?page=edit-pengguna&& id_pengguna=<?php echo $pgn['id_pengguna'];?>" class="btn btn-sm btn-success">Edit</a>
                    </td> <?php }?>
                  </tr>
                  <?php }?>
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Data Pengguna</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="get" action="master/pengguna/tambah_pengguna.php">
            <div class="modal-body">
              <div class="form-group">
                <label for="formGroupExempleInput2">Nama</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Pengguna" name="nama" required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput3">Tempat Lahir</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tempat Lahir" name="tempat_lahir" required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput4">Tanggal Lahir</label>
                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="yyy/dd/mm" name="tgl_lahir" required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput5">Alamat</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat" name="alamat" required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput6">Jenis Kelamin</label>
                <select class="form-control" id="exampleFormControlSelect1" name="jk">
                  <option>--Pilih--</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput7">No Telepon</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No Telepon" name="no_tlp" required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput8">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email" required>
              </div>  
              <div class="form-group">
                <label for="formGroupExempleInput9">Level</label>
                <select class="form-control" id="exampleFormControlSelect1" name="level">
                  <option>--Pilih--</option>
                  <option>Administrator</option>
                  <option>Kabag</option>
                  <option>Staf</option>
                </select>
              </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
          </div> 
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<script>
  function hapus_pengguna(data_id){
    //alert('ok');
    //window.location=("master/pengguna/hapus_pengguna.php?id_pengguna="+data_id);
    Swal.fire({
      title: 'Do you want to delete?',
      //showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: 'YES',
      confirmButtonColor: '#DC143C',
      //denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location=("master/pengguna/hapus_pengguna.php?id_pengguna="+data_id);
      }
    })
  }
</script>
  