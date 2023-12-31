<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <!-- START DATA -->
  <div class="my-3 p-3 bg-body rounded shadow-sm">
      <div class="row">
          <!-- Total Products Card -->
          <div class="col-md-4 mb-3">
              <div class="card bg-primary text-white">
                  <div class="card-body">
                      <h5 class="card-title">Total Products</h5>
                      <p class="card-text">{{ $totalProducts }}</p>
                  </div>
              </div>
          </div>

          <!-- Total Categories Card -->
          <div class="col-md-4 mb-3">
              <div class="card bg-success text-white">
                  <div class="card-body">
                      <h5 class="card-title">Total Categories</h5>
                      <p class="card-text">{{ $totalCategories }}</p>
                  </div>
              </div>
          </div>

          <!-- Total Stock Card -->
          <div class="col-md-4 mb-3">
              <div class="card bg-info text-white">
                  <div class="card-body">
                      <h5 class="card-title">Total Stock</h5>
                      <p class="card-text">{{ $totalStock }}</p>
                  </div>
              </div>
          </div>
      </div>

      <!-- Chart and Table Section -->
      <div class="row">
          <!-- Chart -->
          <div class="col-md-6">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Incoming and Outgoing Chart</h5>
                      <canvas id="incomingOutgoingChart" width="300" height="160"></canvas>
                  </div>
              </div>
          </div>

        <!-- Table Produk yang Stoknya Habis -->
        <div class="col-md-6">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Produk yang perlu di restock</h5>
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th class="col-md-3">ID Produk</th>
                              <th class="col-md-4">Nama</th>
                          </tr>
                      </thead>
                      <tbody>
                          @forelse ($productsWithZeroStock as $product)
                          <tr>
                              <td>000{{ $product->id }}</td>
                              <td>{{ $product->name }}</td>
                          </tr>
                          @empty
                          <tr>
                              <td colspan="3">Tidak ada produk dengan stok habis.</td>
                          </tr>
                          @endforelse
                      </tbody>
                  </table>
                  <!-- Menampilkan tombol navigasi paginasi -->
                  {{ $productsWithZeroStock->links() }}
              </div>
          </div>
        </div>
  </div>
  <!-- AKHIR DATA -->
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
