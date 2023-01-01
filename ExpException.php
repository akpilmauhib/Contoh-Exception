<?php

// Membuat fungsi read, isinya program untuk membaca file baris per baris.
function read($file) {

    $output = null;

    if (!file_exists($file)) {
        return false; // Kembalikan false Bool.
    }

    $open = fopen($file, "r");
    
    fclose($file); // Tutup koneksi
    
    return fread($open, filesize($file)); // Kembalikan output.
}

$read = read("material.txt");

if ($read == false) {
    echo 'File tidak ditemukan';
} else {
    echo $read;
}

return ['status' => false, 'message' => 'File tidak ditemukan'];
