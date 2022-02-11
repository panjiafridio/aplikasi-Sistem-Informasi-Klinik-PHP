<?php
  session_start();
  $login = $_SESSION["login"] == 'admin';
  if( !$login ){
    echo "<script>location.href = 'index.php'</script>";
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Dashboard</title>
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="nav-link text-light active" href="./admin.php">Home</a>
            <a class="nav-link text-light" href="./pelayanPasien/pelayanan.php">Pelayanan Pasien</a>
            <a class="nav-link text-light" href="./laporan/laporan.php">Laporan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Data
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="./dataWilayah/wilayah.php">Wilayah</a></li>
                    <li><a class="dropdown-item" href="./dataUser/user.php">User</a></li>
                    <li><a class="dropdown-item" href="./dataPegawai/pegawai.php">Pegawai</a></li>
                    <li><a class="dropdown-item" href="./dataTindakan/tindakan.php">Tindakan</a></li>
                    <li><a class="dropdown-item" href="./dataObat/obat.php">Obat</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <a class="nav-link text-light bg-danger" href="logout.php">Log out</a>
          </div>
      </nav>
      <h1 class="text-center mt-5">Selamat Datang Admin</h1>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>