<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!$_SESSION['nama']){
  header('Location: ../login.php?session=expired');
}
include('../header.php');?>
<?php include('../conn/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">

<?php include('../conn/config.php');?><div class="wrapper">

  <!-- Preloader -->
  <?php include('../preloader.php');?>

  <!-- Navbar -->
  <?php include('../navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('../logo.php');?>

    <!-- Sidebar -->
    <?php include('../sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('../content_header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
      if (isset ($_GET['page'])){
      if ($_GET['page']== 'dashboard'){
      include('dashboard.php');
    }
    else if($_GET['page']== 'data-stok'){
      include('master/stok/data_stok.php');
    }
    else if($_GET['page']== 'edit-stok'){
      include('master/stok/edit_stok.php');
    }
    else if($_GET['page']== 'data-sarana'){
      include('master/sarana/data_sarana.php');
    }
    else if($_GET['page']== 'edit-sarana'){
      include('master/sarana/edit_sarana.php');
      }
    else if($_GET['page']== 'data-prasarana'){
      include('master/prasarana/data_prasarana.php');
    }
    else if($_GET['page']== 'edit-prasarana'){
      include('master/prasarana/edit_prasarana.php');
    }
    else if($_GET['page']== 'data-peminjaman'){
      include('master/peminjaman/data_peminjaman.php');
    }
    else if($_GET['page']== 'edit-peminjaman'){
      include('master/peminjaman/edit_peminjaman.php');
    }
    else if($_GET['page']== 'data-pengguna'){
      include('master/pengguna/data_pengguna.php');
    }
    else if($_GET['page']== 'edit-pengguna'){
      include('master/pengguna/edit_pengguna.php');
    }
    else if($_GET['page']== 'data-masuk-stok'){
      include('master/masuk/data_masuk.php');
    }
    else if($_GET['page']== 'edit-data-masuk-stok'){
      include('master/masuk/edit_masuk.php');
    }
    else if($_GET['page']== 'data-keluar-stok'){
      include('master/keluar/data_keluar.php');
    }
    else if($_GET['page']== 'edit-data-keluar-stok'){
      include('master/keluar/edit_keluar.php');
    }
    else{
      include('../not_found.php');

    }
  }
    else{
      include('dashboard.php');

  }?>

  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('../footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
