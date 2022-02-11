<?php

    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "inovamedika");

    // Funsgi Untuk membaca / Menampilkan Data
    function query($query){
        global $conn;
        $result = mysqli_query($conn ,$query);
        if( !$result ){
            echo mysqli_error($conn);
        };

        $rows = [];

        while( $row = mysqli_fetch_assoc($result) ){
            $rows[] = $row; 
        }

        return $rows;
    };

    // Fungsi untuk Menambah
    function tambah($query){
        global $conn;
        $nama = $query["nama"];
        $tindakan = $query["tindakan"];
        $obat = $query["obat"];
        $hargaObat = $query["hargatindakan"];
        $hargaTindakan = $query["hargaobat"];
        $totalPembayaran = $hargaObat + $hargaTindakan;


        $query = "INSERT INTO pelayanan VALUES ('', '$nama', '$tindakan', '$hargaTindakan', '$obat', '$hargaObat', '$totalPembayaran')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>