<?php

$koneksi = mysqli_connect("localhost", "root", "", "multiuser");

if (!$koneksi) {
    die("Koneksi Gagal");
}

$select = mysqli_query($koneksi, "SELECT * FROM user");

$buku = mysqli_query($koneksi, "SELECT * FROM buku");