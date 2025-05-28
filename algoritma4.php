<?php
$matriks = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9]
];

function tampilkanDiagonal($matriks) {
    $n = count($matriks);
    $diagonalKiri = [];
    $diagonalKanan = [];

    for ($i = 0; $i < $n; $i++) {
        // Diagonal kiri: posisi [i][i]
        $diagonalKiri[] = $matriks[$i][$i];

        // Diagonal kanan: posisi [i][n - 1 - i]
        $diagonalKanan[] = $matriks[$i][$n - 1 - $i];
    }

    // Tampilkan isi dan jumlah diagonal
    echo "Diagonal Pertama : " . implode(" + ", $diagonalKanan) . "\n";
    echo "= " . array_sum($diagonalKanan) . "\n";    
    echo "<br />";    
    echo "Diagonal Kedua : " . implode(" + ", $diagonalKiri) . "\n";
    echo "=  " . array_sum($diagonalKiri) . "\n\n";

    //return abs($diagonalKiri - $diagonalKanan);

}

// Panggil fungsi
tampilkanDiagonal($matriks);

// ==============================================================
print("<br/> <hr/>");


function selisihDiagonal($matriks) {
    $n = count($matriks);
    $diagonalKiri = 0;
    $diagonalKanan = 0;

    for ($i = 0; $i < $n; $i++) {
        $diagonalKiri += $matriks[$i][$i]; // kiri atas ke kanan bawah
        $diagonalKanan += $matriks[$i][$n - $i - 1]; // kanan atas ke kiri bawah
    }

    return abs($diagonalKiri - $diagonalKanan);


}

// Tampilkan hasil
$hasil = selisihDiagonal($matriks);
echo "Maka hasilnya adalah : $hasil";


?>
