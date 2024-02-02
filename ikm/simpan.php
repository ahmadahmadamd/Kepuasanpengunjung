<?php

// panggil koneksi database
include "../koneksi.php";

// tampilkan data ikm
$tampil = mysqli_query($koneksi, "SELECT * from db_pengunjung  limit 1");
$data = mysqli_fetch_array($tampil);

// tmapung data ke dalam variabel 
$id_ikm = $data['id_ikm'];
$puas = $data['puas'];
$cukup = $data['cukup'];
$kurang = $data['kurang'];

// ambil nilai keterangan 
$keterangan = $_GET['ket'];

// uji jika keterangan tidak kosong
if (isset($keterangan)) {

    // uji jika keterangan = puas 
    if ($keterangan == "puas") {

        // nilai puas di tambah 1 
        $puas = $puas + 1;
        // query update nilai puas ke dalam table ikm
        $query = "UPDATE db_pengunjung SET puas = '$puas' where id_ikm = '$id_ikm' ";
    } elseif ($keterangan == "cukup") {
        // nilai cukup di tambah
        $cukup = $cukup + 1;
        // query update nilai cukup ke dalam table ikm
        $query = "UPDATE db_pengunjung SET cukup = '$cukup' where id_ikm = '$id_ikm' ";
    } elseif ($keterangan == "kurang") {
        // nilai kurang di tambah
        $kurang = $kurang + 1;
        // query update nilai kurang ke dalam table ikm
        $query = "UPDATE db_pengunjung SET kurang = '$kurang' where id_ikm = '$id_ikm' ";
    }

    // update data query 
    mysqli_query($koneksi, $query);
    echo "<script>alert('Terimakasi, anda berhasil memberikan penilaian');
            document.location='index.php';
         </script>";
}
