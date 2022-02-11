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
        $wilayah = $query["wilayah"];
        $totalPasien = $query["totalpasien"];


        $query = "INSERT INTO wilayah VALUES ('', '$wilayah', '$totalPasien')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Fungsi untuk Mengubah
    function ubah($query){
        global $conn;

        $id = $query["id"];
        $wilayah = $query["wilayah"];
        $totalPasien = $query["totalpasien"];

        $query = "UPDATE wilayah SET 
                    wilayah = '$wilayah',
                    totalpasien = '$totalPasien'
         WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Fungsi Untuk menghapus data
    function hapus($id){
        global $conn;

        $query = "DELETE from wilayah WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>