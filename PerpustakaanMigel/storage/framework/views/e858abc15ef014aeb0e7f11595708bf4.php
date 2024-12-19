
<?php $__env->startSection('konten'); ?>
<?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <div class="d-flex">
        <h4>List Data Anggota</h4>
        <div class="ms-auto">
        <a class="btn btn-success" href="<?php echo e(route('anggotaadd')); ?>">Tambah Anggota</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Tanggal Daftar</th>
        </tr>
        <?php $__currentLoopData = $anggotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->idanggota); ?></td>
            <td><?php echo e($data->nama_anggota); ?></td>
            <td><?php echo e($data->alamat); ?></td>
            <td><?php echo e($data->jurusan); ?></td>
            <td><?php echo e($data->tgl_dftar); ?></td>
            <td><a href= "<?php echo e(route('anggotaedit', $data->idanggota)); ?>" class="btn btn-sm btn-warning">Edit</a>
            <form action="<?php echo e(route('anggotadelete', $data->idanggota)); ?>" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini?')" >
                    <?php echo csrf_field(); ?>
                    <button id="delete" class="btn btn-sm btn-danger">Delete</button>
                </form>    
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('viewang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Proyekl\PerpustakaanMigel\resources\views/anggota/view.blade.php ENDPATH**/ ?>