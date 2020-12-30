
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
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

<div class="row no-gutters mt-4 ">
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
        <h3><i class="fas fa-tachometer-alt mr-2"></i>  DASHBOARD </h3> <hr class="bg-secondary">
        <div class="row">
            
        
                <div class="card bg-success text-white ml-4 mb-5" style="width: 18rem;">    
                    <div class="card-body">
                        <div class="a">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="card-title mb-4">JUMLAH PENGGUNA</h5>
    
                            <h1><b><?php echo e($data_penduduk); ?> </b></h1>
                        
                        <a href="/datapenduduk"class="text-white">Detail Pengguna <i class="fas fa-angle-double-right"></i></a>
                     </div>
                </div>
                

        
                
                <div class="card bg-danger text-white ml-4 mb-5" style="width: 18rem;">    
                    <div class="card-body">
                        <div class="a">
                        <i class="fas fa-coins"></i>
                        </div>
                        <h5 class="card-title mb-4">ANGGARAN DESA</h5>

                    <?php $__currentLoopData = $danadesa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h1><b><?php echo e($ds->total); ?> </b></h1>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <a href="/rekapdana"class="text-white">Detail Anggaran <i class="fas fa-angle-double-right"></i></a>
                     </div>
               
                </div>

                
                <div class="card bg-info text-white ml-4 mb-5" style="width: 18rem;">    
                    <div class="card-body">
                        <div class="a">
                        <i class="fas fa-wallet"></i>
                        </div>
                        <h5 class="card-title mb-4">SWADAYA MASYARAKAT</h5>
                        <?php $__currentLoopData = $danaswadaya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h1><b><?php echo e($dd->total); ?> </b></h1>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <a href="/danaswadaya"class="text-white">Detail Anggaran <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
           
           
            <div class="card text-center mr-5">
                <div class="card-header bg-secondary text-white">
                    Daily Word
                </div>
                
                <div class="card-body">
                <h5 class="card-title">Fact Sinar Jaya</h5>
                    <p class="card-text">Desa Sinar Jaya merupakan desa hasil pemekaran desa Gunung Terang.</p>
                    <p class="card-text">Warga Sinar Jaya mayoritas bekerja sebagai petani kopi.</p>
                </div>
                
            </div>
    
    
    </div>
</div>
    
</body>
</html>

<?php /**PATH E:\TUGAS UNILA\SEMESTER 5\web\tugasweb\desaku\resources\views/home.blade.php ENDPATH**/ ?>