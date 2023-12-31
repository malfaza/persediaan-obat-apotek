<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- START FORM -->
<div class="content-wrapper">
<form action='<?php echo e(url('products/'.$data->id)); ?>' method='post'>
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="<?php echo e(url('products')); ?>" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">ID Kategori</label>
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
            <label for="category_id" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" id="searchCategory" placeholder="Cari atau Pilih Kategori">
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">Pilih Kategori</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type_id" class="col-sm-2 col-form-label">Tipe Obat</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" id="searchType" placeholder="Cari atau Pilih Tipe Obat">
                    <select class="form-control" name="type_id" id="type_id">
                        <option value="">Pilih Tipe Obat</option>
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>                    
        <div class="mb-3 row">
            <label for="supplier_id" class="col-sm-2 col-form-label">Supplier</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" id="searchType" placeholder="Cari atau Pilih Supplier">
                    <select class="form-control" name="supplier_id" id="supplier_id">
                        <option value="">Pilih Supplier</option>
                        <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>                    
        
    </div>        
        <div class="mb-3 row">
            <label for="products" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
        </form>
    </div>
    <!-- AKHIR FORM -->  
</div>
<script>
    document.getElementById('searchCategory').addEventListener('input', function() {
        var input, filter, options, select, option, i;
        input = document.getElementById('searchCategory');
        filter = input.value.toUpperCase();
        select = document.getElementById('category_id');
        options = select.getElementsByTagName('option');

        select.setAttribute('size', '5'); // Ubah jumlah opsi yang ditampilkan
        select.style.display = 'block';

        for (i = 0; i < options.length; i++) {
            option = options[i];
            if (option.text.toUpperCase().indexOf(filter) > -1) {
                option.style.display = '';
            } else {
                option.style.display = 'none';
            }
        }
    });

    document.getElementById('category_id').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var input = document.getElementById('searchCategory');
        input.value = selectedOption.text;
    });

    document.getElementById('searchType').addEventListener('input', function() {
        var input, filter, options, select, option, i;
        input = document.getElementById('searchType');
        filter = input.value.toUpperCase();
        select = document.getElementById('type_id');
        options = select.getElementsByTagName('option');

        select.setAttribute('size', '5'); // Ubah jumlah opsi yang ditampilkan
        select.style.display = 'block';

        for (i = 0; i < options.length; i++) {
            option = options[i];
            if (option.text.toUpperCase().indexOf(filter) > -1) {
                option.style.display = '';
            } else {
                option.style.display = 'none';
            }
        }
    });

    document.getElementById('type_id').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var input = document.getElementById('searchType');
        input.value = selectedOption.text;
    });

    document.getElementById('searchsupplier').addEventListener('input', function() {
        var input, filter, options, select, option, i;
        input = document.getElementById('searchsupplier');
        filter = input.value.toUpperCase();
        select = document.getElementById('supplier_id');
        options = select.getElementsByTagName('option');

        select.setAttribute('size', '5'); // Ubah jumlah opsi yang ditampilkan
        select.style.display = 'block';

        for (i = 0; i < options.length; i++) {
            option = options[i];
            if (option.text.toUpperCase().indexOf(filter) > -1) {
                option.style.display = '';
            } else {
                option.style.display = 'none';
            }
        }
    });

    document.getElementById('supplier_id').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var input = document.getElementById('searchsupplier');
        input.value = selectedOption.text;
    });
</script>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laravel\stockManagement\resources\views/products/edit.blade.php ENDPATH**/ ?>