<?php


//inhetitance

// class Siswa {
//     public $nama;
//     protected $nis;

//     public function __construct($nama,$nis){
//         $this->nama = $nama;
//         $this->nis = $nis;
//     }

//     public function getNis() {
//         return $this->nis;
//     }
// }

// $siswa = new Siswa('Marsha','1234321234');





// echo $siswa->nama;
// echo "</br>";
// echo $siswa->getNis();









//kedua
echo "<hr>";

class Siswa {
    public $nama;
    protected $nis;


    public function __construct($nama, $nis) {
        $this->nama= $nama;
        $this->nis = $nis;
    }

    public function getNis(){
        return $this->nis;
    }
}



class SiswaKelas extends Siswa {
    public $rombel;
    public $rayon;


    public function __construct($nama, $nis, $rombel, $rayon) {
        parent::__construct($nama, $nis);
        $this->rombel = $rombel;
        $this->rayon = $rayon;
    }

    public function dataSiswa() {
        return "Nama:  " . $this->nama . "<br> NIS" . $this->nis . "<br> 
        Rombel: " . $this->rombel . "<br>  Rayon: " . $this->rayon;
    }
}



$siswa_kelas = new SiswaKelas('marsha', '12332123', 'PPLG X-4', 'ciawi -1');


echo $siswa_kelas->getNis();
echo "<hr>";
echo $siswa_kelas->dataSiswa();





?>