<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }
    public function luas($jari_jari) : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }
    public function keliling(): float
    {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume(): float
    {
        return (4/3) * self::PHI * $this->jari_jari * $this->jari_jari * $this->jari_jari;
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }
    public function volume(): float
    {
        return self::PHI * $this->jari_jari * $this->jari_jari * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume(): float
    {
        return (1/3) * self::PHI * $this->jari_jari * $this->jari_jari * $this->tinggi;
    }
}

$nasi_tumpeng = new Kerucut(4,10);
echo "Volume dari nasi tumpeng : " . $nasi_tumpeng->volume(4,10);

$bundaran = new Lingkaran(25);
echo "\nLuas dari bundaran : " . $bundaran->luas(25);
echo "\nKeliling dari bundaran : " . $bundaran->keliling(25);

$pingpong = new Bola(10);
echo "\nVolume pingpong : " . $pingpong->volume(10);

$celengan = new Tabung(4, 16);
echo "\nVolume celengan : " . $celengan->volume(4,16);