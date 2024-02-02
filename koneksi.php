<?php

// buat koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "kepuasanpengunjung");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
