<?php
  session_start();
  $login = $_SESSION["login"] == 'user';
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

    <title>User Dashboard</title>
  </head>
  <body>
    <div class="continer-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="nav-link text-light active" href="./user.php">Home</a>
            <a class="nav-link text-light" href="./pendaftaranPasien/register.php">Pendaftaran Pasien</a>
            <a class="nav-link text-light" href="./pembayaran/pembayaran.php">Pembayaran</a>
            <a class="nav-link text-light bg-danger" href="logout.php">Log out</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
      </nav>
      <h1 class="text-center mt-5">Selamat Datang pasien</h1>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>