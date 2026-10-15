<?php
// Kerjakan mulai dari sini untuk menyimpan data ke Session
// $_SESSION["..."] = ...;

session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST["nama"] ?? "";
    $menu = $_POST["menu"] ?? "";
    $jumlah = (int) ($_POST["jumlah"] ?? 0);
    $kategori = $_POST["kategori"] ?? "";
    $harga = (int) ($_POST["harga"] ?? 0);
    $diskon = (float) ($_POST["diskon"] ?? 0);

    if ($jumlah <= 0) {
        die("Pesanan gagal! Jumlah porsi minimal 1.");
    }

    $subtotal = $harga * $jumlah;
    $nilaiDiskon = $subtotal * ($diskon / 100);
    $total = $subtotal - $nilaiDiskon;


    $_SESSION["transaksi"] = [
        "nama" => $nama,
        "menu" => $menu,
        "jumlah" => $jumlah,
        "kategori" => $kategori,
        "harga" => $harga,
        "subtotal" => $subtotal,
        "diskon" => $nilaiDiskon,
        "total" => $total
    ];


    header("Location: struk.php");
    exit;
}
