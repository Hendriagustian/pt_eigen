<?php
$matriks = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9]
];

function prosesDiagonal($matriks) {
    $n = count($matriks);
    $diagonalKiri = [];
    $diagonalKanan = [];

    // Ambil elemen-elemen diagonal
    for ($i = 0; $i < $n; $i++) {
        $diagonalKiri[] = $matriks[$i][$i]; // kiri atas ke kanan bawah
        $diagonalKanan[] = $matriks[$i][$n - 1 - $i]; // kanan atas ke kiri bawah
    }

    // Hitung jumlah
    $jumlahKiri = array_sum($diagonalKiri);
    $jumlahKanan = array_sum($diagonalKanan);

    // Tampilkan hasil
    echo "Diagonal pertama: " . implode(" + ", $diagonalKiri) . "\n";
    echo "= $jumlahKiri\n\n <br/>";

    echo "Diagonal kedua: " . implode(" + ", $diagonalKanan) . "\n";
    echo "= $jumlahKanan\n\n <br/>";


    // $selisih = abs ($jumlahKiri - $jumlahKanan);
    // abs () = digunakan agar hasil pengurangannya selalu positif.
    $selisih = ($jumlahKiri - $jumlahKanan);
    echo "Maka hasilnya adalah : $jumlahKiri - $jumlahKanan = $selisih\n";
}

// Jalankan fungsi
prosesDiagonal($matriks);
?>
