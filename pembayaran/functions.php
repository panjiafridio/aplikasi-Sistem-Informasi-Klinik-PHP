<?php
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "inovamedika");

    // Function Cari Data
    function cari($pencarian){
        global $conn;

        $query = "SELECT * FROM pelayanan WHERE nama LIKE '%$pencarian%' ";
        $hasilQuery = mysqli_query($conn, $query);

        return $hasilQuery;

        // return query($query);

    }
?>