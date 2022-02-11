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
        $tindakan = $query["tindakan"];
        $biayaTindakan = $query["biayatindakan"];
        $keterangan = $query["keterangan"];


        $query = "INSERT INTO tindakan VALUES ('', '$tindakan', '$biayaTindakan', '$keterangan')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Fungsi untuk Mengubah
    function ubah($query){
        global $conn;

        $id = $query["id"];
        $tindakan = $query["tindakan"];
        $biayaTindakan = $query["biayatindakan"];
        $keterangan = $query["keterangan"];

        $query = "UPDATE tindakan SET 
                    tindakan = '$tindakan',
                    biayatindakan = '$biayaTindakan',
                    keterangan = '$keterangan'
         WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Fungsi Untuk menghapus data
    function hapus($id){
        global $conn;

        $query = "DELETE from tindakan WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>