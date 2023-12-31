<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- START FORM -->
<div class="content-wrapper">
<form action='<?php echo e(url('suppliers')); ?>' method='post'>
    <?php echo csrf_field(); ?>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="<?php echo e(url('suppliers')); ?>" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="<?php echo e(Session::get('name')); ?>" id="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='description' value="<?php echo e(Session::get('description')); ?>" id="description">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
        </form>
    </div>
    <!-- AKHIR FORM -->  
</div>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laravel\stockManagement\resources\views/suppliers/create.blade.php ENDPATH**/ ?>