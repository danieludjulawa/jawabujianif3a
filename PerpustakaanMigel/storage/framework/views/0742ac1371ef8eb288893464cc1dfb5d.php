<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Toko Bangunan</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('css/main.css')); ?>">
    <script src='main.js'></script>
</head>
<body>
    <h1 class="text-center">
    Perpustakaan Migel
    </h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar navbar-dark bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
             <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                     <a class="nav-link" href="/">Peminjaman</a>
                       <a class="nav-link" href="/buku">buku</a>
                        <a class="nav-link" href="/karyawan">Karyawan</a>
                       <a class="nav-link" href="/mobil">Mobil</a>
                </div>
            </div>
        </div>
    </nav>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <div class="container">
    <div class="d-flex justify-content-between">
    <div class="mt-4">
      <h2>Transaksi</h2>
    </div>
    <div class="mt-4">
        
 
      
    </div>
  </div>
         
    
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="" method="POST">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="buku">Nama Buku: </label>
            <input type="text" class="form-control" id="buku" name="buku" value="<?php echo e(old('buku')); ?>">
            <?php $__errorArgs = ['buku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="anggota">Nama anggota: </label>
            <input type="text" class="form-control" id="anggota" name="anggota" value="<?php echo e(old('buku')); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Pinjam</button>
    </form>
    
</div>

    
    
    
    
</body>

</html><?php /**PATH C:\Proyekl\PerpustakaanMigel\resources\views/welcome.blade.php ENDPATH**/ ?>