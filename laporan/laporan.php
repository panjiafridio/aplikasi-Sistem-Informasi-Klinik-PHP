<?php 

    session_start();
    $login = $_SESSION["login"] == 'admin';
    if( !$login ){
      echo "<script>location.href = 'index.php'</script>";
    }

    require 'functions.php';

    $containerWilayah = query("SELECT * FROM wilayah");
    foreach($containerWilayah as $wilayah){
        $dataPasien [] = $wilayah["totalpasien"];
        $dataWilayah[] = $wilayah["wilayah"];

    }


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laporan</title>
  </head>
  <body>
    <div class="container-fluid">
        <h2 class="text-center p-4 bg-success text-light">Daftar Laporan dari setiap data</h2>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="text-center mt-5">Data Laporan per-Wilayah</h5>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>

        <button class="bg-success mt-5 mb-5 btn"><a class="text-light" href="../admin.php">Kembali</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        const labels = <?php echo json_encode($dataWilayah)?>;
    
        const data = {
          labels: labels,
          datasets: [{
            label: '',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: <?php echo json_encode($dataPasien)?>,
          }]
        };
    
        const config = {
          type: 'bar',
          data: data,
          options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

  </body>
</html>