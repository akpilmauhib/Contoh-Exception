<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Membuat fungsi read, isinya program untuk membaca file baris per baris.
function read($file)
{

    $output = null;

    if (!file_exists($file)) {
        throw new Exception('File tidak ditemukan'); // Throw exception.
    }

    $open = fopen($file, "r");

    fclose($file); // Tutup koneksi

    return fread($open, filesize($file)); // Kembalikan output.
}

$read = read("material.tx"); // Masukan material.tx, harusnya txt, sengaja disalahkan.

if ($read == false) {
    echo 'File tidak ditemukan ..';
} else {
    echo $read;
}
