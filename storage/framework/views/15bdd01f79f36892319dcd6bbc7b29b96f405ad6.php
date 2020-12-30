<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/36b9a3dc03.js" crossorigin="anonymous"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <li class="nav-item">
                    <a class="nav-link text-white" href="/logout" > <i class="fas fa-sign-out-alt mr-2"></i>  LOGOUT</a><hr class="bg-secondary">
                </li>
            </ul>
    
    </div>


    <div class="col-md-10 mt-2 p-5 pl-5">
        <h3><i class="far fa-edit mr-2"></i>  Edit Data </h3> <hr class="bg-secondary">
        
            <form method="post" action="/data/<?php echo e($data_penduduk->id); ?>">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="text" class="form-control" id="nama" aria-describedby="namahelp" value="<?php echo e($data_penduduk->nama); ?>">
                    <small id="namahelp" class="form-text text-muted">masukan nama.</small>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($data_penduduk->email); ?>">
                    <small id="emailHelp" class="form-text text-muted">masukan email.</small>
                </div>


                <div class="form-group">
                    <label for="nik">NIK </label>
                    <input type="text" class="form-control" id="nik" aria-describedby="nikhelp" value="<?php echo e($data_penduduk->nik); ?>">
                    <small id="nikhelp" class="form-text text-muted">masukan nik.</small>
                </div>
                
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir </label>
                    <input type="date" class="form-control" id="tanggal" aria-describedby="tanggalhelp" value="<?php echo e($data_penduduk->tanggal_lahir); ?>">
                    <small id="tanggalhelp" class="form-text text-muted">masukan Tanggal Lahir.</small>
                </div>

                <div class="form-group">
                    <label for="tanggal">Jenis Kelamin </label> 
                        <select class="form-control" value="<?php echo e($data_penduduk->jenis_kelamin); ?>">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                            <option>Patut Dipertanyakan</option>
                        </select>
                </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-location-arrow mr-2"></i>Submit</button>
            </form>
        
        
        <div class="row">
        </div>
</div>
    

</body>
</html><?php /**PATH E:\TUGAS UNILA\SEMESTER 5\web\tugasweb\desaku\resources\views//editdata.blade.php ENDPATH**/ ?>