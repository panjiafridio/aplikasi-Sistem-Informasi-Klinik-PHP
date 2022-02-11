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
?>