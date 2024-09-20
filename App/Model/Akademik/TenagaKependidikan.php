<?php

namespace App\Model\Akademik;

use App\Model\Akademik\Pegawai;

class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;

    public function cuti(): void {
    }
}