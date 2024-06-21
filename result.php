<?php
include 'bahanbakar.php';

if (isset($_POST['kirim'])) {
    $proses = new beli;
    $proses->setHarga(15420, 16130, 18310, 16510);
    $proses->jenis = $_POST['jenis'];
    $proses->jumlah = $_POST['jumlah'];

    $proses->hargabeli();
    echo "<center>";
    echo "<-------------------------------------------->" . "<br>";
    echo "Anda membeli bahan bakar minyak tipe " . $proses->jenis . "<br>";
    echo "Dengan jumlah : " . $proses->jumlah . " Liter<br>";
    echo "Total yang harus anda bayar adalah RP " . number_format($proses->hargabeli(), 0, '', '.') . "<br>";
    echo "----------------------------------------------<br>";
    echo '<button onclick="window.location.href=\'index.php\'">Beli Lagi</button>';
    echo "</center>";
}
?>
