    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Prasarana</h3>
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
                    <th>Lokasi</th>
                    <th>Luas</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_prasarana");
                    while ($prs = mysqli_fetch_array($query)) {
                      $no++
                    ?>
                  <tr>
                    <td width="2%"><?php echo $no?></td>
                    <td><?php echo $prs['nama'];?></td>
                    <td><?php echo $prs['lokasi'];?></td>
                    <td><?php echo $prs['luas'];?></td>
                    <td><?php echo $prs['keterangan'];?></td>
                    <td>
                      <a onclick="hapus_prasarana(<?php echo $prs['id_prasarana']?>)" class="btn btn-sm btn-danger">Delete</a>
                      <a href="index.php?page=edit-prasarana&& id_prasarana=<?php echo $prs['id_prasarana'];?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                  </tr>
                  <?php }?>
                  </tbody>
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
            <h4 class="modal-title">Data Prasarana</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="get" action="master/prasarana/tambah_prasarana.php">
            <div class="modal-body">
              <div class="form-group">
                <label for="formGroupExempleInput2">Nama</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Prasarana" name="nama" required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput3">Lokasi</label>
                <select class="form-control" id="exampleFormControlSelect1" name="lokasi" required>
                  <option>--Pilih--</option>
                  <option>Lt 1</option>
                  <option>Lt 2</option>
                  <option>Lt 3</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput4">Luas</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Luas" name="luas" required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput5">Keterangan</label>
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
  function hapus_prasarana(data_id){
    //alert('ok');
    //window.location=("master/prasarana/hapus_prasarana.php?id_prasarana="+data_id);
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
        window.location=("master/prasarana/hapus_prasarana.php?id_prasarana="+data_id);
      }
    })
  }
</script>
  