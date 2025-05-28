<?php
$input = ["php", "html", "css", "php", "javascript", "php", "html"];
$query = ["php", "html", "python"];

$frekuensi = array_count_values($input);
$hasil = array_map(function($kata) use ($frekuensi) {
    return isset($frekuensi[$kata]) ? $frekuensi[$kata] : 0;
}, $query);

//print_r($hasil); //hasil dari array
echo json_encode($hasil); //convert hanya hasil array


// array_map untuk langsung menghasilkan array hasil berdasarkan $query.
// array_count_values($input) : menghasilkan array asosiatif dengan jumlah kemunculan setiap kata di $input.
// Array asosiatif adalah jenis array di mana setiap elemen diakses melalui kunci (atau indeks) yang bukan berupa angka urutan (seperti 0, 1, 2). 
// isset () digunakan untuk memeriksa apakah sebuah variabel telah ditetapkan dan bernilai bukan NULL



//======================================================================== 
print_r("<hr/>"); //html garis

function hitungKemunculan($input, $query) {
    $frekuensi = array_count_values($input);
    $hasil = [];

    foreach ($query as $kata) {
        $jumlah = isset($frekuensi[$kata]) ? $frekuensi[$kata] : 0;
        $hasil[] = $jumlah; // Masukkan jumlah ke array hasil
        echo "$kata: $jumlah\n";
    }

    return $hasil;

}

// Panggil fungsi dan simpan ke variabel
$jumlahKata = hitungKemunculan($input, $query);

print_r("<hr/>"); 
// Tampilkan hasil array angka
print_r($jumlahKata);

?>
