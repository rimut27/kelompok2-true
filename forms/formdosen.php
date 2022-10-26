<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Dosen</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body style="background-color: #f3f5fa">
    <!--=======Header=======-->
    <header style="background-color: #37517e" id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="../index.html">Kelompok 2</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="../index.html">Home</a></li>
            <li class="dropdown">
              <a href="#">
                <span>Input Data</span>
                <i class="bi bi-chevron-down"></i>
              </a>
              <ul>
                <li><a href="formmhs.php">Mahasiswa</a></li>
                <li><a href="formdosen.php">Dosen</a></li>
                <li><a href="formmatkul.php">Mata Kuliah</a></li>
                <li><a href="formnilai.php">Nilai</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="laporan.html">Laporan</a></li>
            <li>
              <a class="getstarted" href="about.html">About</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <br><br><br><br><br>
    <div class="container">
        <h1 class="">Tambah Data Dosen</h1>
        <form method="post" action="doseadd.php">
            <div class="mb-3">
                <label class="form-label ">Kode Dosen</label>
                <input type="text" class="form-control " name ="kd_dosen">
            </div>
            <div class="mb-3">
                <label class="form-label ">Nama Dosen</label>
                <input type="text" class="form-control" name ="nama_dosen" >
            </div>
            <div class="mb-3">
                <label class="form-label ">Email Dosen</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label ">No Telepon Dosen</label>
                <input type="text" class="form-control" name = "no_telp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>