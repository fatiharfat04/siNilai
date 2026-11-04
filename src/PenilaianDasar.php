<?php
declare(strict_types=1);
class PenilaianDasar {
    protected function validasi(float ...$daftar): void {
        foreach ($daftar as $nilai) {
            if (!is_finite($nilai) || $nilai < 0 || $nilai > 100) throw new InvalidArgumentException('Nilai harus 0–100.');
        }
    }
    public function hitung(float $tugas, float $uts, float $uas): float {
        $this->validasi($tugas, $uts, $uas);
        return $tugas * 0.4 + $uts * 0.3 + $uas * 0.3;
    }
}