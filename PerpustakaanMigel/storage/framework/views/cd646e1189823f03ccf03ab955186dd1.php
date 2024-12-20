
<?php $__env->startSection('konten'); ?>
<h4>Edit details</h4>
<form action="<?php echo e(route('detailupdate', $details->nopinjam)); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="formbold-input-group mb-3">
        <label class="formbold-form-label" for="buku">Buku yang dipinjam:</label>
        <select class="formbold-form-select" name="buku" id="buku">
            <?php $__empty_1 = true; $__currentLoopData = $bukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($buku->idbuku); ?>"><?php echo e($buku->judul_buku); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <option value="">Tidak ada buku tersedia</option>
            <?php endif; ?>
        </select>
    </div>
    <div class="formbold-input-group mb-3">
        <label class="formbold-form-label" for="anggota">Anggota yang meminjam:</label>
        <select class="formbold-form-select" name="anggota" id="anggota">
            <?php $__empty_1 = true; $__currentLoopData = $anggotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($anggota->idanggota); ?>"><?php echo e($anggota->nama_anggota); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <option value="">Tidak ada buku tersedia</option>
            <?php endif; ?>
        </select>
    </div>
    <label>Tanggal Pinjam:</label>
    <input type="date" name="tgl_pinjam" value="<?php echo e($details->tgl_pinjam); ?>" id="tgl_pinjam" class="form-control mb-2">
    <label>Tanggal Kembali: :</label>
    <input type="date" name="tgl_kembali" value="<?php echo e($details->tgl_kembali); ?>" id="tgl_kembali" class="form-control mb-2">
    <label>Denda: :</label>
    <input type="num" name="denda" value="<?php echo e($details->denda); ?>" id="denda" class="form-control mb-2">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('viewdet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Proyekl\PerpustakaanMigel\resources\views/detail/edit.blade.php ENDPATH**/ ?>