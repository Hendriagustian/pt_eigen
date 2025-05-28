<?php
function cariKataTerpanjang($kalimat) {
    // Pisahkan kalimat menjadi array kata
    $kataArray = explode(" ", $kalimat);

    $kataTerpanjang = "";
    $panjangTerpanjang = 0;

    // Telusuri setiap kata
    foreach ($kataArray as $kata) {
        // Hilangkan tanda baca jika perlu (opsional)
        $kataBersih = preg_replace("/[^a-zA-Z0-9]/", "", $kata);
        
        if (strlen($kataBersih) > $panjangTerpanjang) {
            $kataTerpanjang = $kataBersih;
            $panjangTerpanjang = strlen($kataBersih);
        }
    }

    // Tampilkan hasil
    echo "Kata terpanjang: " . $kataTerpanjang . "\n";
    echo "<br/>";
    echo "Jumlah karakter: " . $panjangTerpanjang;
}

// Contoh penggunaan
$kalimat = "Nama saya adalah Hendri Agustian dan saya sedang membuat syntax pemograman php untuk test pemograman di PT. EIGEN TRI MATHEMA";
cariKataTerpanjang($kalimat);
