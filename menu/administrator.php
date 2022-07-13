<nav class="mt-2">                                                                                                                                                                                                                                                      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Data Barang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=data-stok" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=data-sarana" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sarana</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=data-prasarana" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prasarana</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-masuk-stok" class="nav-link">
              <i class="nav-icon fas fa-share"></i>
              <p>
                Data Masuk
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-keluar-stok" class="nav-link">
              <i class="nav-icon fas fa-reply"></i>
              <p>
                Data Keluar
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-peminjaman" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Peminjaman
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-pengguna" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Pengguna
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="../logout.php" class="nav-link text-red" onclick="return confirm('Are you sure you want to logout ?')">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>