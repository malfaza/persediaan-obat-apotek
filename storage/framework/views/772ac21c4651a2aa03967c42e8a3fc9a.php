
<!DOCTYPE html>
<?php $__env->startSection('content'); ?>
   <!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-3">ID Kategori</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
            <tr>
                <td>000<?php echo e($item->id); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->description); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<!-- AKHIR DATA --> 
<?php $__env->stopSection(); ?>
<?php /**PATH C:\laravel\stockManagement\resources\views/pdf/export.blade.php ENDPATH**/ ?>