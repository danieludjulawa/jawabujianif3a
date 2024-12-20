
<?php $__env->startSection('konten'); ?>
<h4>Penambahan Anggota</h4>
    <form action="<?php echo e(route('anggotasubmited')); ?>" method="POST">
    <?php echo csrf_field(); ?>
        <label>Nama Anggota: </label>
        <input type="text" name="nama_anggota" id="nama_anggota" class="form-control mb-2">
        <label>Alamat:</label>
        <input type="text" name="alamat" id="alamat" class="form-control mb-2">
        <label>Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" class="form-control mb-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Proyekl\PerpustakaanMigel\resources\views/anggota/add.blade.php ENDPATH**/ ?>