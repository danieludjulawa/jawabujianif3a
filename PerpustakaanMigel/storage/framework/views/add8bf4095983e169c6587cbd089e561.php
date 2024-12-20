
<?php $__env->startSection('konten'); ?>
<?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <div class="d-flex">
        <h4>List Data Buku</h4>
        <div class="ms-auto">
        <a class="btn btn-success" href="<?php echo e(route('bukuadd')); ?>">Tambah Buku</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>ID Buku</th>
            <th>Judul buku</th>
            <th>Penerbit</th>

            <th>Pengarang</th>
            <th>Jumlah</th>
        </tr>
        <?php $__currentLoopData = $bukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->idbuku); ?></td>
            <td><?php echo e($data->judul_buku); ?></td>
            <td><?php echo e($data->penerbit); ?></td>
            <td><?php echo e($data->pengarang); ?></td>
            <td><?php echo e($data->jumlah); ?></td>
            <td><a href="<?php echo e(route('bukuedit', $data->idbuku)); ?>" class="btn btn-sm btn-warning">Edit</a>
            <form action="<?php echo e(route('bukudelete', $data->idbuku)); ?>" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini?')" >
                    <?php echo csrf_field(); ?>
                    <button id="delete" class="btn btn-sm btn-danger">Delete</button>
                </form>    
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Proyekl\PerpustakaanMigel\resources\views/buku/view.blade.php ENDPATH**/ ?>