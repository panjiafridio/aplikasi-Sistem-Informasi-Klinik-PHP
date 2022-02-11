<?php
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "inovamedika");

    // Fungsi untuk Registrasi
    function register($data){
        global $conn;
        $nama = $data["namapasien"];
        $umur = $data["umur"];
        $domisili = $data["domisili"];

        // Cek Apakah username sudah ada apa belum di dalam database
        $result = mysqli_query($conn, "SELECT namapasien FROM user WHERE namapasien = '$nama'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>alert('Username Sudah tersedia, Mohon masukkan yang lain')</script>";
            return false;
        }


        $query = "INSERT INTO user VALUES ('', '$nama', '$umur', '$domisili')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>