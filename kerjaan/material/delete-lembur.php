<?php

include("core/core.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM lembur WHERE id = $id";
    $query = mysqli_query($db, $sql)or die(mysqli_error($db));

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: page-lembur.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
