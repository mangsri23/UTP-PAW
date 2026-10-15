<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

// Hitung harga
$harga = 0;
if ($menu == "Pizza Segitiga Polus") {
    $harga = 25000;
}
if ($menu == "Susu Elektrik Electrical") {
    $harga = 18000;
}
if ($menu == "Space Donut Oxygen") {
    $harga = 15000;
}
if ($menu == "Jus Berry MedBay") {
    $harga = 20000;
}
if ($menu == "Emergency Steak Navigation") {
    $harga = 45000;
}
$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 0;

if ($kategori == "Crewmate" && $jumlah >= 4) {
    $diskon = 0.15 * $subtotal;
}
if ($kategori == "Impostor" && $jumlah >= 4) {
    $diskon = 0;
}

// total harga
$total = $subtotal;

// cek valid
$valid = true;
$pesan = "";

if ($jumlah <= 0) {
    $valid = false;
    $pesan = "Pesanan gagal! Jumlah porsi minimal 1.";
}

