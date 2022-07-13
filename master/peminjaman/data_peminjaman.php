    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Peminjaman</h3>
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
                    <th>Nama Barang</th>
                    <th>Nama Peminjam</th>
                    <th>No KTP</th>
                    <th>Jumlah</th>
                    <th>Jaminan</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Keperluan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman INNER JOIN tb_sarana ON tb_peminjaman.id_sarana = tb_sarana.id_sarana");
                    while ($pmnj = mysqli_fetch_array($query)) {
                      $no++
                    ?>
                  <tr>
                    <td width="2%"><?php echo $no?></td>
                    <td><?php echo $pmnj['nama_sarana'];?></td>
                    <td><?php echo $pmnj['nama'];?></td>
                    <td><?php echo $pmnj['no_ktp'];?></td>
                    <td><?php echo $pmnj['jml_peminjaman'];?></td>
                    <td><?php echo $pmnj['jaminan'];?></td>
                    <td><?php echo $pmnj['tgl_pinjam'];?></td>
                    <td><?php echo $pmnj['tgl_kembali'];?></td>
                    <td><?php echo $pmnj['keperluan'];?></td>
                    <td>
                      <a onclick="hapus_peminjaman(<?php echo $pmnj['id_peminjaman']?>)" class="btn btn-sm btn-danger">Delete</a>
                      <a href="index.php?page=edit-peminjaman&& id_peminjaman=<?php echo $pmnj['id_peminjaman'];?>" class="btn btn-sm btn-success">Edit</a>
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
            <h4 class="modal-title">Data Peminjaman</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="get" action="master/peminjaman/tambah_peminjaman.php">
            <div class="modal-body">
              <div class="form-group">
                <label>Nama Barang</label>
                <select name="nama_sarana" class="form-control">
                  <option value="">--Pilih--</option>
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_sarana");
                    while ($pmnj = mysqli_fetch_array($query)) {
                    
                  ?>
                  <option value="<?php echo $pmnj['id_sarana'];?>"><?php echo $pmnj['nama_sarana'];?></option>

                  <?php }?>
                  
                </select>
              </div>
              <div class="form-group">
                <label>Nama Peminjam</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Peminjam" name="nama" required>
              </div>
              <div class="form-group">
                <label>No KTP</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No KTP" name="no_ktp" required>
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah" name="jml_peminjaman" required>
              </div>
              <div class="form-group">
                <label>Jaminan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Jaminan" name="jaminan" required>
              </div>
              <div class="form-group">
                <label>Tanggal Pinjam</label>
                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="yyy/dd/mm" name="tgl_pinjam" required>
              </div>
              <div class="form-group">
                <label>Tanggal Kembali</label>
                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="yyy/dd/mm" name="tgl_kembali" required>
              </div>  
              <div class="form-group">
                <label>Keperluan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Keperluan" name="keperluan" required>
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
  function hapus_peminjaman(data_id){
    //alert('ok');
    //window.location=("master/peminjaman/hapus_peminjaman.php?id_peminjaman="+data_id);
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
        window.location=("master/peminjaman/hapus_peminjaman.php?id_peminjaman="+data_id);
      }
    })
  }
</script>
  