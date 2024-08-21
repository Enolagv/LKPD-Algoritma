<?php
function hitungHargaTotalDanDiskon($jumlahBuku) {
    $hargaPerEksemplar = 5000;
    $eksemplarPerBuku = 10;
    $jumlahEksemplar = $jumlahBuku * $eksemplarPerBuku;
    $totalHarga = 0;
    $diskon = 0;

    if ($jumlahEksemplar <= 100) {
        // Tidak ada diskon
        $totalHarga = $jumlahEksemplar * $hargaPerEksemplar;
        $diskon = 0;
    } elseif ($jumlahEksemplar <= 200) {
        // 100 eksemplar pertama diskon 5%
        $diskon100Pertama = 100 * $hargaPerEksemplar * 0.05;
        $totalHarga = 100 * $hargaPerEksemplar * 0.95;

        // Sisa buku diskon 15%
        $sisaBuku = $jumlahEksemplar - 100;
        $diskonSisa = $sisaBuku * $hargaPerEksemplar * 0.15;
        $totalHarga += $sisaBuku * $hargaPerEksemplar * 0.85;

        $diskon = $diskon100Pertama + $diskonSisa;
    } else {
        // 100 eksemplar pertama diskon 7%
        $diskon100Pertama = 100 * $hargaPerEksemplar * 0.07;
        $totalHarga = 100 * $hargaPerEksemplar * 0.93;

        // 100 eksemplar kedua diskon 17%
        $diskon100Kedua = 100 * $hargaPerEksemplar * 0.17;
        $totalHarga += 100 * $hargaPerEksemplar * 0.83;

        // Sisa buku diskon 27%
        $sisaBuku = $jumlahEksemplar - 200;
        $diskonSisa = $sisaBuku * $hargaPerEksemplar * 0.27;
        $totalHarga += $sisaBuku * $hargaPerEksemplar * 0.73;

        $diskon = $diskon100Pertama + $diskon100Kedua + $diskonSisa;
    }

    return array("totalHarga" => $totalHarga, "diskon" => $diskon);
}

// Contoh penggunaan
$jumlahBuku = intval(readline("Masukkan jumlah buku yang dibeli: "));
$result = hitungHargaTotalDanDiskon($jumlahBuku);
$hargaTotal = $result['totalHarga'];
$diskon = $result['diskon'];

echo "Jumlah buku yang dibeli: " . $jumlahBuku . "\n";
echo "Total harga yang harus dibayar: Rp" . number_format($hargaTotal, 0, ',', '.') . "\n";
echo "Total diskon yang didapatkan: Rp" . number_format($diskon, 0, ',', '.') . "\n";
?>
