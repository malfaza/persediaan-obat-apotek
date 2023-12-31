<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- START FORM -->
<div class="content-wrapper">
<form action='<?php echo e(url('types/'.$data->id)); ?>' method='post'>
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="<?php echo e(url('types')); ?>" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
            000<?php echo e($data->id); ?>

            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="<?php echo e($data->name); ?>" id="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='description' value="<?php echo e($data->description); ?>" id="description">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="types" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
</div>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\stockManagement\resources\views/types/edit.blade.php ENDPATH**/ ?>