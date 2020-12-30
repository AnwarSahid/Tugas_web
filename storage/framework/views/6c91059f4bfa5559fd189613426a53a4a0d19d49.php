<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/36b9a3dc03.js" crossorigin="anonymous"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link href="css/app.css" rel="stylesheet"> -->
    <link href="css/cpp.css" rel="stylesheet">
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-warning fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand  mt-2  text-dark" > SELAMAT DATANG DI DESAKU.ID | <b>DESA SINAR JAYA</b> 
    </a>
  </div>
</nav>

<div class="row no-gutters mt-5 ">
    <div class="col-md-2 mt-3 pt-5 bg-dark">
    <ul class="nav flex-column mb-5 ml-3 ">
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="/home"> <i class="fas fa-tachometer-alt mr-2"></i>   DASHBOARD</a><hr class="bg-secondary"> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/agenda"> <i class="far fa-calendar-alt mr-2"></i>  AGENDA</a><hr class="bg-secondary"> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/datapenduduk"> <i class="fas fa-user-friends mr-2"></i>  DATA PENDUDUK</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/rekapdana"> <i class="fas fa-coins mr-2"></i>  REKAP DANA</a><hr class="bg-secondary">
                </li>
                
                <li class="nav-item" aria-labelledby="navbarDropdown">
                    <a class="nav-link text-white" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt mr-2"></i>
                        <?php echo e(__('LOGOUT')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </li><hr class="bg-secondary">
            </ul>
    
    </div>

    <div class="col-md-10 mt-2 p-5 pl-5">
        <h3><i class="fas fa-user-plus mr-2"></i>  EDIT RINCIAN </h3> <hr class="bg-secondary">
            

            <?php if(session('status')): ?>
                <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>


            <form method="post" action="/danadesa/edit/<?php echo e($desa->id); ?>">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group col-md-6">
                

            <div class="form-group">
                    <label for="tanggal">Tanggal  </label>
                    <input type="date" class="form-control" id="tanggatanggall" aria-describedby="tanggalhelp" name="tanggal"value="<?php echo e($desa->tanggal); ?>">
                    <small id="tanggalhelp" class="form-text text-muted">masukan Tanggal .</small>
                </div>


                <div class="form-group">
                    <label for="pemasukan"> Pemasukan </label>
                    <input type="text" class="form-control <?php $__errorArgs = ['pemasukan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="pemasukan" aria-describedby="pemasukan help" name="pemasukan" value="<?php echo e($desa->pemasukan); ?>">
                    <small id="pemasukanhelp" class="form-text text-muted">pemasukan.</small>
                    
                </div>
                
                <div class="form-group">
                    <label for="sumber"> Sumber </label>
                    <input type="text" class="form-control <?php $__errorArgs = ['sumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="sumber" aria-describedby="sumberhelp" name="sumber" >
                    <small id="sumberhelp" class="form-text text-muted">sumber.</small>
                </div>

                <div class="form-group">
                    <label for="pengeluaran"> Pengeluaran </label>
                    <input type="text" class="form-control <?php $__errorArgs = ['pengeluaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="pengeluaran" aria-describedby="pengeluaranhelp" name="pengeluaran" >
                    <small id="pemasukanhelp" class="form-text text-muted">pengeluaran.</small>
                </div>

                <div class="form-group">
                    <label for="penggunaan"> Penggunaan </label>
                    <input type="text" class="form-control <?php $__errorArgs = ['penggunaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="penggunaan" aria-describedby="pengeluaranhelp" name="penggunaan" >
                    <small id="pemasukanhelp" class="form-text text-muted">penggunaan.</small>
                </div>

                <div class="form-group">
                    <label for="total"> Total </label>
                    <input type="text" class="form-control <?php $__errorArgs = ['total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="total" aria-describedby="totalhelp" name="total">
                    <small id="totalhelp" class="form-text text-muted">total</small>
                </div>


            
            <button type="submit" class="btn btn-success"><i class="fas fa-location-arrow mr-2"></i>Submit</button>
            </form>
            
            <div class="row pl-3">
    </div>
</div>
            

<?php /**PATH E:\TUGAS UNILA\SEMESTER 5\web\tugasweb\desaku\resources\views/editdana.blade.php ENDPATH**/ ?>