<?php
namespace App\Model\Akademik;
use App\Model\Akademik\Pegawai;
class Dosen extends Pegawai {
    public $nidn;
    
    public function mengajar() : void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}
?>