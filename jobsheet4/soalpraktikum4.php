<?php 
//soal 4.6
$skornilai = [85,92,78,90,75,88,79,70];
$totalnilai = 0;

foreach ($skornilai as $skor) {
    $totalnilai += $skor / 8;
}
echo "Total rata rata adalah : $totalnilai","<br>";


//soal 4.7
$harga_produk = 120000;
$diskon = 0.2;
if ($harga_produk > 100000) {
    $harga_setelah_diskon = $harga_produk - ($harga_produk * $diskon);
} else {
    $harga_setelah_diskon = $harga_produk;
}

echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . $harga_setelah_diskon,"<br>";

//soal 4.8
$skor = 700;
echo "Total skor pemain adalah: $skor <br>";
$hadiah = $skor > 500 ? 'YA' : 'TIDAK';
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";

?>


