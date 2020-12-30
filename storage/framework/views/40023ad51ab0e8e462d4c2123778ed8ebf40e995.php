<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/36b9a3dc03.js" crossorigin="anonymous"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PENDUDUK</title>
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
        <h3><i class="fas fa-tachometer-alt mr-2"></i>  DATA PENDUDUK </h3> <hr class="bg-secondary">

        <?php if(session('success')): ?>
                <div class="alert alert-danger">
                        <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="row pl-3">
            <a class="btn btn-success mb-3" href="/create" role="button"><i class="fas fa-user-plus mr-2"></i>Tambah Penduduk</a>
            

            
            <table class="table table-striped">
            
                <thead>
                    <tr class="table-info ml-2" > 
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Email</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $data_penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($dt-> nama); ?></td>
                        <td><?php echo e($dt-> tanggal_lahir); ?></td>
                        <td><?php echo e($dt-> email); ?></td>
                        <td><?php echo e($dt-> nik); ?></td>
                        <td><?php echo e($dt-> jenis_kelamin); ?></td>
                        <td>
                            <div class="row ml-1 mr-1">
                                    <a href="/data/<?php echo e($dt->id); ?>" class="badge badge-success btn-block mb-2 ">Edit </a>
                    
                                    <a href="/penduduk/hapus/<?php echo e($dt->id); ?>" class="badge badge-danger btn-block mb-2"> Delete</a>
                                    
                                

                            </div>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

                </tbody>
        
                </table>
            
            </div>
    
            
    </div>
</div>
    

</body>
</html>

<?php /**PATH E:\TUGAS UNILA\SEMESTER 5\web\tugasweb\desaku\resources\views/data.blade.php ENDPATH**/ ?>