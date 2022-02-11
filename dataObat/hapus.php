<?php
require "functions.php";

$id = $_GET["id"];
if( hapus($id) > 0){
    echo "  <script>
                alert('Berhasil Menghapus Data');
                document.location.href = 'obat.php';
            </script>";
}else{
    echo "<script>alert('Gagal Menghapus Data')</script>";
}

?>