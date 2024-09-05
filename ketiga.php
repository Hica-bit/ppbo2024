<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas($jari_jari) : float {
        return self::PHI*$jari_jari*$jari_jari;
    }

    public function keliling($jari_jari) : float {
        return 2*self::PHI*$jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume($jari_jari) : float {
        return (4/3)*self::PHI*pow($jari_jari,3);
    }

}
class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume($jari_jari,$tinggi) : float {
        return self::PHI*pow($jari_jari,2)*$tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume($jari_jari,$tinggi) : float {
        return (1/3)*self::PHI*pow($jari_jari,2)*$tinggi;
    }
}

$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;
echo "Volume dari nasi tumpeng : " . $nasi_tumpeng->volume(4,10);

$bundaran = new Lingkaran();
$bundaran->jari_jari = 25;
echo "\nLuas dari bundaran : " . $bundaran->luas(25);
echo "\nKeliling dari bundaran : " . $bundaran->keliling(25);

$pingpong = new Bola();
$pingpong->jari_jari = 10;
echo "\nVolume pingpong : " . $pingpong->volume(10);

$celengan = new Tabung();
$celengan->jari_jari = 4;
$celengan->tinggi = 16;
echo "\nVolume celengan : " . $celengan->volume(4,16);

