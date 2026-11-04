<?php
declare(strict_types=1);
class PenilaianPraktikum extends PenilaianDasar {
    public function hitung(float $tugas, float $uts, float $uas): float {
        $this->validasi($tugas, $uts, $uas);
        return $tugas * 0.6 + $uts * 0.2 + $uas * 0.2;
    }
}