  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link">
      <span class="brand-text font-weight-light">Apotek Dhe Farma</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                 <a href="{{ url('products') }}" class="nav-link">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Data Produk
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('categories') }}" class="nav-link">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Kategori
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('types') }}" class="nav-link">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Tipe Obat
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('suppliers') }}" class="nav-link">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Suppliers
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Pencatatan
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">2</span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('incomings') }}" class="nav-link">
                      <p>Barang Masuk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('outgoings') }}" class="nav-link">
                      <p>Barang Keluar</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
  </aside>

  