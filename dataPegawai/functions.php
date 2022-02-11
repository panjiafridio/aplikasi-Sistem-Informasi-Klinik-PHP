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
        $nip = $query["nip"];
        $domisili = $query["domisili"];


        $query = "INSERT INTO pegawai VALUES ('', '$nama', '$nip', '$domisili')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Fungsi untuk Mengubah
    function ubah($query){
        global $conn;

        $id = $query["id"];
        $nama = $query["nama"];
        $nip = $query["nip"];
        $domisili = $query["domisili"];

        $query = "UPDATE pegawai SET 
                    nama = '$nama',
                    nip = '$nip',
                    domisili = '$domisili'
         WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Fungsi Untuk menghapus data
    function hapus($id){
        global $conn;

        $query = "DELETE from pegawai WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>