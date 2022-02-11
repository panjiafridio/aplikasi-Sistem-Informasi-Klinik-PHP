<?php 
session_start();
$login = $_SESSION["login"] == 'admin';
if( !$login ){
  echo "<script>location.href = '../index.php'</script>";
}
require 'functions.php';

$containerAkun = query("SELECT * FROM wilayah");

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Data Wilayah</title>
  </head>
  <body>
    <h6 class="mt-1 mx-2 bg-danger pt-2 pb-2 px-3 rounded-pill" style="width: 6rem;"><a class="link-light" href="../logout.php">Log out</a></h6>
    <h6 class="mt-1 mx-2 bg-success pt-2 pb-2 px-3 rounded-pill" style="width: 6rem;"><a class="link-light" href="../admin.php">Kembali</a></h6>
    <h1 class="mx-2">Dashboard Data Wilayah</h1>
    <a class="mx-2" href="tambah.php"><button class ="btn btn-primary">Tambah Data</button></a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Aksi</th>
              <th scope="col">Kota Asal pasien</th>
              <th scope="col">Jumlah Pasien</th>
            </tr>
          </thead>
          <?php $i = 1; ?>
          <?php foreach($containerAkun as $akun){ ?>
            <tbody>
                <tr>
                  <th scope="row"><?php echo $i ?></th>
                  <td>
                      <a href="hapus.php?id=<?php echo $akun["id"] ?>" class="hapus">hapus</a>
                      <a href="ubah.php?id=<?php echo $akun["id"] ?>">ubah</a>
                  </td>
                  <td><?php echo $akun["wilayah"] ?></td>
                  <td><?php echo $akun["totalpasien"] ?></td>
                </tr>
            </tbody>
            <?php $i++ ?>
            <?php } ?>
        </table>
        <h3>Lihat dengan Grafik : <a class="btn bg-success text-light mt-5 d-inline" href="../laporan/laporan.php">Laporan</a></h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>
      const hapus = document.querySelector(".hapus");

      hapus.addEventListener("click", function(){
        
        return confirm("Apakah anda ingin menghapus data ini?");
      });
    </script>
  </body>
</html>