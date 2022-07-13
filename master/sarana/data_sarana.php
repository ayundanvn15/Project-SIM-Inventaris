    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sarana</h3>
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
                    <th>Lokasi</th>
                    <th>Status</th>
                    <th>Kondisi</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_sarana");
                    while ($srn = mysqli_fetch_array($query)) {
                      $no++
                    ?>
                  <tr>
                    <td width="2%"><?php echo $no?></td>
                    <td><?php echo $srn['nama_sarana'];?></td>
                    <td><?php echo $srn['merk'];?></td>
                    <td><?php echo $srn['lokasi'];?></td>
                    <td><?php echo $srn['status'];?></td>
                    <td><?php echo $srn['kondisi'];?></td>
                    <td><?php echo $srn['jumlah'];?></td>
                    <td>
                      <a onclick="hapus_sarana(<?php echo $srn['id_sarana']?>)" class="btn btn-sm btn-danger">Delete</a>
                      <a href="index.php?page=edit-sarana&& id_sarana=<?php echo $srn['id_sarana'];?>" class="btn btn-sm btn-success">Edit</a>
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
            <h4 class="modal-title">Data Sarana</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="get" action="master/sarana/tambah_sarana.php">
            <div class="modal-body">
              <div class="form-group">
                <label for="formGroupExempleInput2">Nama</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama_sarana" required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput2">Merk</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Merk" name="merk" required>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput2">Lokasi</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="lokasi" required>
                    <option>--Pilih--</option>
                    <option>Gudang</option>
                    <option>Ruang 1</option>
                    <option>Ruang 2</option>
                    <option>Ruang 3</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput2">Status</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                    <option>--Pilih--</option>
                    <option>Milik Sendiri</option>
                    <option>Sewa</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput2">Kondisi</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="kondisi" required>
                    <option>--Pilih--</option>
                    <option>Bagus & layak Pakai</option>
                    <option>Rusak</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput2">Jumlah</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah" name="jumlah" required>
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
  function hapus_sarana(data_id){
    //alert('ok');
    //window.location=("master/sarana/hapus_sarana.php?id_sarana="+data_id);
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
        window.location=("master/sarana/hapus_sarana.php?id_sarana="+data_id);
      }
    })
  }
</script>
  