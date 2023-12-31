<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a>Apotek Dhe Farma</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="<?php echo e(asset('alte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('alte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE -->
<script src="<?php echo e(asset('alte/dist/js/adminlte.js')); ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo e(asset('alte/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('alte/dist/js/demo.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('alte/dist/js/pages/dashboard3.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var incomingData = <?php echo json_encode($incomingChartData, 15, 512) ?>;
    var outgoingData = <?php echo json_encode($outgoingChartData, 15, 512) ?>;

    var ctx = document.getElementById('incomingOutgoingChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: incomingData.map(item => item.date),
            datasets: [{
                label: 'Incoming',
                data: incomingData.map(item => item.count),
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: false
            }, {
                label: 'Outgoing',
                data: outgoingData.map(item => item.count),
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                fill: false
            }]
        }
    });
</script>
<!-- Bootstrap JS -->
<script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH C:\laravel\stockManagement\resources\views/dashboard/index.blade.php ENDPATH**/ ?>