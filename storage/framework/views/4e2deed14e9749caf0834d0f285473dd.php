<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- START FORM -->
<div class="content-wrapper">
<form action='<?php echo e(url('incomings')); ?>' method='post'>
    <?php echo csrf_field(); ?>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="<?php echo e(url('incomings')); ?>" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="product_id" class="col-sm-2 col-form-label">Produk</label>
            <div class="col-sm-10">
                <select class="form-control" name="product_id" id="product_id">
                    <option value="">Pilih Produk</option>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>        
        <div class="mb-3 row">
            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='quantity' value="<?php echo e(Session::get('quantity')); ?>" id="quantity">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="expire" class="col-sm-2 col-form-label">Tanggal Expired</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='expire' value="<?php echo e(Session::get('expire')); ?>" id="expire">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='description' value="<?php echo e(Session::get('description')); ?>" id="description">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="product" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
        </form>
    </div>
</div>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laravel\stockManagement\resources\views/incomings/create.blade.php ENDPATH**/ ?>