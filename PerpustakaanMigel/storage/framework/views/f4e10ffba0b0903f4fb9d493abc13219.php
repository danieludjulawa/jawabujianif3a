
<?php $__env->startSection('konten'); ?>
<h4>Edit bukus</h4>
    <form action="<?php echo e(route('bukuupdate', $bukus->idbuku)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <!-- <label>ID bukus:</label>
        <input type="text" name="namabukus" value="<?php echo e($bukus->idbukus); ?>" id="idbukus" class="form-control mb-2"> -->
        <label>Nama Buku:</label>
        <input type="text" name="judul_buku" value="<?php echo e($bukus->judul_buku); ?>" id="judul_buku" class="form-control mb-2">
        <label>Penerbit:</label>
        <input type="text" name="penerbit" value="<?php echo e($bukus->penerbit); ?>" id="penerbit" class="form-control mb-2">
        <label>Pengarang:</label>
        <input type="text" name="pengarang" value="<?php echo e($bukus->pengarang); ?>" id="pengarang" class="form-control mb-2">
        <label>Jumlah: :</label>
        <input type="text" name="jumlah" value="<?php echo e($bukus->jumlah); ?>" id="jumlah" class="form-control mb-2">
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Proyekl\PerpustakaanMigel\resources\views/buku/edit.blade.php ENDPATH**/ ?>