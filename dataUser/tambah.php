<?php 
    session_start();
    $login = $_SESSION["login"] == 'admin';
    if( !$login ){
        echo "<script>location.href = '../index.php'</script>";
    }
    // koneksi ke database
    require "functions.php";
    
    if( isset($_POST["submit"]) ){

        if(tambah($_POST) > 0){
            $succes = true;
        }else{
            $error = true;
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Tambah Data Anda</title>
</head>
<body>
<div class="container mt-3">
    <h1>Masukkan Data Pada Kolom Yang Tersedia</h1>
    <?php if(isset($succes)){ ?>
        <h1 style="color : green;">Sukses Menambah Data</h1>
    <?php } ?>
    <?php if(isset($error)){ ?>
        <h1 style="color : red;">Gagal Menambah Data</h1>
    <?php } ?>
    <form action="" method="post" class="mb-4">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
          <input type="text" name="namapasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Umur</label>
          <input type="text" name="umur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Domisili</label>
          <input type="text" name="domisili" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="user.php">Kembali</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>