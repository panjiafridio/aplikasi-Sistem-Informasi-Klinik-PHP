<?php

session_start();
  $login = $_SESSION["login"] == 'user';
  if( !$login ){
    echo "<script>location.href = 'index.php'</script>";
}
require 'functions.php';
$containerTagihan = [];
if ( isset($_POST["cari"]) ){
    $pencarian = cari($_POST["text"]);
  
    $containerTagihan = $pencarian;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tagihan Pasien</title>
  </head>
  <body>
      <div class="container-fluid">
        <h1>Selamat Datang</h1>
        <h6>Masukkan nama anda untuk mengetahui informasi tagihan anda</h6>

        <form action="" method="post" class="mx-2">
            <input style="width : 50%;" class="form-control mt-5" type="text" name="text" placeholder="Ketikkan Pencarian Anda..." autocomplete="off">
            <button type="submit" name="cari" class="btn btn-primary mb-5 mt-2">Cari</button>
        </form>

        <?php if( $containerTagihan == null) { ?>
          <h1 class="text-center mb-5">Tidak ada data</h1>
          <h6 class="text-center">Harap masukkan nama yang sudah anda daftarkan</h6>
        <?php }else{ ?>
          <div class="card text-center">
              <div class="card-header">
                Sukses
              </div>
              <div class="card-body">
                  <h5 class="card-title">Informasi Tagihan Anda</h5>
                      <?php foreach($containerTagihan as $tagihan){ ?>
                          <ol class="list-group list-group-numbered">
                              <li class="list-group-item d-flex justify-content-between align-items-start">
                                  Tindakan :
                                <div class="ms-2 me-auto">
                                  <div class="fw-bold"><?php echo $tagihan["tindakan"] ?></div>
                                </div>
                                <span class="badge bg-primary rounded-pill"><?php echo $tagihan["biayatindakan"] ?></span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    Biaya obat :
                                  <div class="fw-bold"><?php echo $tagihan["obat"] ?></div>
                                </div>
                                <span class="badge bg-primary rounded-pill"><?php echo $tagihan["biayaobat"] ?></span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                  <div class="fw-bold">Total pembayaran :</div>
                                </div>
                                <span class="badge bg-primary rounded-pill"><?php echo $tagihan["totalpembayaran"] ?></span>
                              </li>
                          </ol>
                      <?php } ?>
              </div>
              <div class="card-footer text-muted">
                  <a href="../user.php" class="btn btn-primary">Kembali</a>
              </div>
          </div>
        <?php }?>

        <button class="btn btn-primary"><a class="text-light" href="../user.php">Kembali</a></button>


      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>