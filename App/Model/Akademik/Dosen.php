<?php
namespace App\Model\Akademik;
require_once 'App/Model/Akademik/Pegawai.php';
class Dosen extends Pegawai {
    public $nidn;
    
    public function mengajar() : void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}
?>