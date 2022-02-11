<?php 
    session_start();
    $login = $_SESSION["login"] == 'admin';
    if( !$login ){
        echo "<script>location.href = '../index.php'</script>";
    }
    // koneksi ke database
    require "functions.php";

    $id = $_GET["id"];
    $akun = query("SELECT * FROM tindakan WHERE id = $id")[0]; 

    
    if( isset($_POST["submit"]) ){

        if(ubah($_POST) > 0){
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
    <title>Ubah Data Anda</title>
</head>
<body>
<div class="container mt-3">
    <h1>Masukkan Data Pada Kolom Yang Tersedia</h1>
    <?php if(isset($succes)){ ?>
        <h1 style="color : green;">Sukses Merubah Data</h1>
    <?php } ?>
    <?php if(isset($error)){ ?>
        <h1 style="color : red;">Gagal Merubah Data</h1>
    <?php } ?>
    <form action="" method="post" class="mb-4">
        <input type="hidden" name="id" value="<?php echo $akun["id"] ?>">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tindakan</label>
          <input type="text" name="tindakan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $akun["tindakan"] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Biaya Tindakan</label>
          <input type="text" name="biayatindakan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $akun["biayatindakan"] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="exampleInputPassword1" value="<?php echo $akun["keterangan"] ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="tindakan.php">Kembali</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>