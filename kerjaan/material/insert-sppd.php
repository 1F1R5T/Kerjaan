<?php
include("core/core.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tbh_sppd'])){

    // ambil data dari formulir
    $nama_variabel = $_POST['nama_var'];
    $jns_usaha = $_POST['jns_usah'];
    $daerah = $_POST['drh'];
    $kode = $_POST['kd'];
		$tahun = $_POST['th'];
    $pengeluaran = $_POST['pengelrn'];

    // buat query
    $sql = "INSERT INTO sppd VALUES ('', '$nama_variabel', '$jns_usaha','$daerah', '$kode', '$tahun', '$pengeluaran')";
    $query = mysqli_query($db, $sql)or die(mysqli_error($db));

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: page-sppd.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: page-sppd.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
