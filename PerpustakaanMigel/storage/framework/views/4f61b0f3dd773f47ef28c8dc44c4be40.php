
<?php $__env->startSection('konten'); ?>
<?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <div class="d-flex">
        <h4>List Detail Peminjaman</h4>
        <div class="ms-auto">
        <a class="btn btn-success" href="<?php echo e(route('main')); ?>">Tambah Peminjaman</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>Nomor Peminjaman</th>
            
            <th>ID Anggota</th>
            <th>Nama Anggota</th>
            <th>ID Buku</th>
            <th>Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Denda</th>
        </tr>
        <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->nopinjam); ?></td>
            <td><?php echo e($data->idanggota); ?></td>
            <td><?php echo e($data->nama); ?></td>
            <td><?php echo e($data->idbuku); ?></td>
            <td><?php echo e($data->judul); ?></td>
            <td><?php echo e($data->tgl_pinjam); ?></td>
            <td><?php echo e($data->tgl_kembali); ?></td>
            <td><?php echo e($data->denda); ?></td>
            <td><a href= "<?php echo e(route('detailedit', $data->nopinjam)); ?>" class="btn btn-sm btn-warning">Edit</a>
            <form action="<?php echo e(route('detaildelete', $data->nopinjam)); ?>" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini?')" >
                    <?php echo csrf_field(); ?>
                    <button id="delete" class="btn btn-sm btn-danger">Delete</button>
                </form>    
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('viewdet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Proyekl\PerpustakaanMigel\resources\views/detail/view.blade.php ENDPATH**/ ?>