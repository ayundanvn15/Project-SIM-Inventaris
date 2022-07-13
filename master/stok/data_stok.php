    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Stok</h3>
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
                    <th>Merk</th>
                    <th>Kemasan</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Action</th> 
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_stok");
                    while ($stok = mysqli_fetch_array($query)) {
                      
                      $no++
                    ?>
                  <tr>
                    <td width="2%"><?php echo $no?></td>
                    <td><?php echo $stok['nama'];?></td>
                    <td><?php echo $stok['merk'];?></td>
                    <td><?php echo $stok['kemasan'];?></td>
                    <td><?php echo $stok['jumlah_stok'];?></td>
                    <td><?php echo $stok['keterangan'];?></td>
                    <td>
                      <a onclick="hapus_stok(<?php echo $stok['id_stok']?>)" class="btn btn-sm btn-danger">Delete</a> 
                      <a href="index.php?page=edit-stok&& id_stok=<?php echo $stok['id_stok'];?>" class="btn btn-sm btn-success">Edit</a>
                    </td>  
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
            <h4 class="modal-title">Data Stok</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="get" action="master/stok/tambah_stok.php">
            <div class="modal-body">
              <div class="form-group">
                <label for="formGroupExempleInput">Nama</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" maxlength="100"required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput">Merk</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Merk" name="merk" maxlength="50"required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput">Kemasan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kemasan" name="kemasan" maxlength="50"required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput">Jumlah</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah" name="jumlah_stok" maxlength="20"required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput">Keterangan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Keterangan" name="keterangan" required>
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
  function hapus_stok(data_id){
    //alert('ok');
    //window.location=("master/stok/hapus_stok.php?id_stok="+data_id);
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
        window.location=("master/stok/hapus_stok.php?id_stok="+data_id);
      }
    })
  }
</script>
  