<?php

include("core/core.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

  // ambil data dari formulir
  $id = $_POST['id'];
  $nama_variabel = $_POST['nama_var'];
  $jns_usaha = $_POST['jns_usah'];
  $daerah = $_POST['drh'];
  $kode = $_POST['kd'];
  $tahun = $_POST['th'];
  $pengeluaran = $_POST['pengelrn'];

    // buat query update
    $sql = "UPDATE bahan SET nama_variabel='$nama_variabel', jns_usaha='$jns_usaha', daerah='$daerah', kode='$kode', tahun='$tahun', pengeluaran='$pengeluaran' WHERE id=$id";
    $query = mysqli_query($db, $sql)or die(mysqli_error($db));

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman page-sppd.php
        header('Location: page-bahan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
