<?php
function reverseOnlyLetters($str) {
    $chars = str_split($str);
    $letters = [];

    // Kumpulkan semua huruf
    foreach ($chars as $char) {
        if (ctype_alpha($char)) {
            $letters[] = $char;
        }
    }

    // Balik urutan huruf
    $letters = array_reverse($letters);
    $result = '';
    $letterIndex = 0;

    // Bangun ulang string dengan huruf terbalik dan angka tetap
    foreach ($chars as $char) {
        if (ctype_alpha($char)) {
            $result .= $letters[$letterIndex++];
        } else {
            $result .= $char;
        }
    }

    return $result;
}

// Contoh penggunaan
$input = "NEGIE1";
$hasil = reverseOnlyLetters($input);
echo $hasil; // Output: EIGEN1

?>
