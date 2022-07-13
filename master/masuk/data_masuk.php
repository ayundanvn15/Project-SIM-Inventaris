    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Masuk</h3>
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
                    <th>Tanggal Masuk</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_masuk
                      INNER JOIN tb_stok ON tb_masuk.id_stok = tb_stok.id_stok");
                    while ($msk = mysqli_fetch_array($query)) {
                      $no++
                    ?>
                  <tr>
                    <td width="2%"><?php echo $no?></td>
                    <td><?php echo $msk['nama'];?></td>
                    <td><?php echo $msk['merk'];?></td>
                    <td><?php echo $msk['kemasan'];?></td>
                    <td><?php echo $msk['jumlah'];?></td>
                    <td><?php echo $msk['tgl_masuk'];?></td>
                    <td>
                      <a onclick="hapus_masuk(<?php echo $msk['id_masuk']?>)" class="btn btn-sm btn-danger">Delete</a>
                      <a href="index.php?page=edit-data-masuk-stok&& id_masuk=<?php echo $msk['id_masuk'];?>" class="btn btn-sm btn-success">Edit</a>
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
            <h4 class="modal-title">Data Masuk Stok</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="get" action="master/masuk/tambah_masuk.php">
            <div class="modal-body">
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
              <div class="form-group">
                <label for="formGroupExempleInput3">Merk</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Merk" name="merk" >
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput3">Kemasan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kemasan" name="kemasan" >
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput3">Jumlah</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah" name="jumlah" >
              </div>
              <div class="form-group">
                <label for="formGroupExempleInput4">Tanggal Masuk</label>
                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Tanggal Masuk" name="tgl_masuk" required>
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
  function hapus_masuk(data_id){
    //alert('ok');
    //window.location=("master/masuk/hapus_masuk.php?id_masuk="+data_id);
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
        window.location=("master/masuk/hapus_masuk.php?id_masuk="+data_id);
      }
    })
  }
</script>
  