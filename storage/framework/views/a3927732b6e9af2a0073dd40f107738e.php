<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Apotek Dhe Farma</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?php echo e(url('products')); ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?php echo e(url('categories')); ?>">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?php echo e(url('incomings')); ?>">Incomings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?php echo e(url('outgoings')); ?>">Outgoings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?php echo e(url('sesi/logout')); ?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\laravel\stockManagement\resources\views/components/navbar.blade.php ENDPATH**/ ?>