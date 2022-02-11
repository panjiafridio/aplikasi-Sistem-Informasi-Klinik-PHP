<?php
session_start();
$login = $_SESSION["login"] == 'admin';
if( !$login ){
    echo "<script>location.href = '../index.php'</script>";
}

require 'functions.php';

$containerTindakan = query("SELECT * FROM tindakan");
$containerObat = query("SELECT * FROM obat");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pelayanan Pasien</title>
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center mt-5">Selamat Datang Petugas</h2>
        <?php if(isset($succes)){ ?>
            <h1 style="color : green;">Sukses Menambah Data</h1>
        <?php } ?>
        <?php if(isset($error)){ ?>
            <h1 style="color : red;">Gagal Menambah Data</h1>
        <?php } ?>
        <h4 class="mt-5 bg-success rounded p-2 text-light">Isi Data sesuai tindakan dan Obat yang di perlukan</h4>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="" method="post">
                        <h3 class="mb-2">Nama Pasien</h3>
                        <input class="mb-5" type="text" name="nama" id="">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-center text-light p-2 mt-5 bg-success">Tindakan yang di lakukan</h4>
                                    <select name="tindakan" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Salah satu</option>
                                        <?php foreach($containerTindakan as $tindakan){ ?>
                                            <option value="<?php echo $tindakan["tindakan"] ?>"><?php echo $tindakan["tindakan"] ?></option>
                                        <?php }?>
                                    </select>
                                    <h4 class="text-center text-light p-2 mt-2 bg-success">Biaya Dibebankan</h4>
                                    <select name="hargatindakan" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Salah satu</option>
                                        <?php foreach($containerTindakan as $tindakan){ ?>
                                            <option value="<?php echo $tindakan["biayatindakan"] ?>"><?php echo $tindakan["biayatindakan"] ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <h4 class="text-center text-light p-2 mt-5 bg-success">Obat yang diperlukan</h4>
                                    <select name="obat" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Salah satu</option>
                                        <?php foreach($containerObat as $obat){ ?>
                                            <option value="<?php echo $obat["namaobat"] ?>"><?php echo $obat["namaobat"] ?></option>
                                        <?php }?>
                                    </select>
                                    <h4 class="text-center text-light p-2 mt-2 bg-success">Biaya Dibebankan</h4>
                                    <select name="hargaobat" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Salah satu</option>
                                        <?php foreach($containerObat as $obat){ ?>
                                            <option value="<?php echo $obat["harga"] ?>"><?php echo $obat["harga"] ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input class="btn bg-success text-light mt-5" type="submit" name="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
        <button class="bg-success mt-5 mb-5 btn"><a class="text-light" href="../admin.php">Kembali</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>