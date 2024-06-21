<?php
class shell {
    protected $ppn;
    private $ssuper, $svpower, $svpowerDiesel, $svpowerNitro;
    public $jumlah, $jenis;

    function __construct() {
        $this->ppn = 0.1;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->ssuper = $tipe1;
        $this->svpower = $tipe2;
        $this->svpowerDiesel = $tipe3;
        $this->svpowerNitro = $tipe4;
    }

    public function getHarga() {
    $data["ssuper"] = $this->ssuper;
    $data["svpower"] = $this->svpower;
    $data["svpowerDiesel"] = $this->svpowerDiesel;
    $data["svpowerNitro"] = $this->svpowerNitro;

    return $data;
    }
}

class beli extends shell {
    public function hargabeli() {
        $dataharga = $this->getHarga();
        $hargabeli = $this->jumlah * $dataharga[$this->jenis];
        $hargappn = $hargabeli * $this->ppn;
        $hargabayar = $hargabeli + $hargappn;
        return $hargabayar;
    }

    public function cetakpembelian() {
        echo "<center>";
        echo "--------------------------------------------" . "<br>";
        echo "Anda membeli bahan bakar minyak tipe " . $this->jenis . "<br>";
        echo "Dengan jumlah : " . $this->jumlah . " Liter<br>";
        echo "Total yang harus anda bayar adalah RP " . number_format($this->hargabeli(), 0, '', '.') . "<br>";
        echo "----------------------------------------------<br>";
        echo '<button a href="index.php">Beli Lagi</button>';
        echo "</center>";
    }
}
?>
